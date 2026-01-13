pipeline {
  agent any

  environment {
    AWS_REGION = "us-east-1"
    ECR_REPO = "629649838083.dkr.ecr.us-east-1.amazonaws.com/php-app"
  }

  stages {

    stage('Checkout') {
      steps {
        git branch: 'main', url: 'https://github.com/<your-username>/php-app-ci.git'
      }
    }

    stage('Build Docker Image') {
      steps {
        sh 'docker build -t php-app .'
      }
    }

    stage('Push to ECR') {
      steps {
        sh '''
        aws ecr get-login-password --region $AWS_REGION \
        | docker login --username AWS --password-stdin $ECR_REPO

        docker tag php-app:latest $ECR_REPO:latest
        docker push $ECR_REPO:latest
        '''
      }
    }

    stage('Deploy to EKS') {
      steps {
        sh '''
        kubectl apply -f k8s/deployment.yaml
        kubectl apply -f k8s/service.yaml
        kubectl apply -f k8s/ingress.yaml
        '''
      }
    }
  }
}
