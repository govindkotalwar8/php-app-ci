pipeline {
    agent any

    triggers {
        githubPush()
    }

    environment {
        AWS_REGION = "us-east-1"
        ECR_REPO   = "629649838083.dkr.ecr.us-east-1.amazonaws.com/php-app"
        IMAGE_TAG  = "${BUILD_NUMBER}"
        CLUSTER    = "test-eks"
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
                docker build -t ${ECR_REPO}:${IMAGE_TAG} .
                """
            }
        }

        stage('Login to ECR') {
            steps {
                sh """
                aws ecr get-login-password --region ${AWS_REGION} \
                | docker login --username AWS --password-stdin ${ECR_REPO}
                """
            }
        }

        stage('Push Image to ECR') {
            steps {
                sh """
                docker push ${ECR_REPO}:${IMAGE_TAG}
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
                kubectl set image deployment/php-app php-app=${ECR_REPO}:${IMAGE_TAG}
                kubectl rollout status deployment/php-app
                """
            }
        }
    }
}
