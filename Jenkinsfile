pipeline {
  agent any

  environment {
    AWS_REGION = "us-east-1"
    ECR_REPO  = "629649838083.dkr.ecr.us-east-1.amazonaws.com/php-app"
    IMAGE_TAG = "${BUILD_NUMBER}"
  }

  stages {

    stage('Verify Workspace') {
      steps {
        sh 'pwd'
        sh 'ls -la'
      }
    }

    stage('Build Docker Image') {
      steps {
        sh 'docker build -t $ECR_REPO:$IMAGE_TAG .'
      }
    }

    stage('Login to AWS ECR') {
      steps {
        sh '''
          aws ecr get-login-password --region $AWS_REGION \
          | docker login --username AWS \
          --password-stdin 629649838083.dkr.ecr.us-east-1.amazonaws.com
        '''
      }
    }

    stage('Push Image to ECR') {
      steps {
        sh 'docker push $ECR_REPO:$IMAGE_TAG'
      }
    }

    stage('Deploy to EKS') {
      steps {
        sh '''
          kubectl apply -f k8s/deployment.yaml
          kubectl apply -f k8s/service.yaml
        '''
      }
    }
  }

  post {
    success {
      echo "✅ Image successfully pushed to ECR and deployed to EKS"
    }
    failure {
      echo "❌ Pipeline failed"
    }
  }
}
