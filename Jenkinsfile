pipeline {
    agent any

    triggers {
        githubPush()
    }

    environment {
        AWS_REGION     = "us-east-1"
        AWS_ACCOUNT_ID = "629649838083"
        ECR_REPO_NAME  = "php-app"
        ECR_REGISTRY   = "${AWS_ACCOUNT_ID}.dkr.ecr.${AWS_REGION}.amazonaws.com"
        IMAGE_TAG      = "${BUILD_NUMBER}"
        CLUSTER        = "test-eks"
        IMAGE_URI      = "${ECR_REGISTRY}/${ECR_REPO_NAME}:${IMAGE_TAG}"
    }

    stages {

        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build Docker Image') {
            steps {
                sh """
                docker build -t ${IMAGE_URI} -f app/Dockerfile app/
                """
            }
        }

        stage('Login to Amazon ECR') {
            steps {
                sh """
                aws ecr get-login-password --region ${AWS_REGION} \
                | docker login --username AWS --password-stdin ${ECR_REGISTRY}
                """
            }
        }

        stage('Push Image to ECR') {
            steps {
                sh """
                docker push ${IMAGE_URI}
                """
            }
        }

        stage('Configure kubectl') {
            steps {
                sh """
                aws eks update-kubeconfig --region ${AWS_REGION} --name ${CLUSTER}
                """
            }
        }

        stage('Deploy to EKS') {
            steps {
                sh """
                kubectl set image deployment/php-app php-app=${IMAGE_URI}
                kubectl rollout status deployment/php-app
                """
            }
        }
    }
}
