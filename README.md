# PHP Student Registration Application – DevOps CI/CD on AWS EKS

## Overview

This project demonstrates a complete end-to-end DevOps implementation for a **PHP Student Registration Application** deployed on **Amazon EKS** using modern cloud-native and DevOps best practices.

The solution covers **infrastructure provisioning, configuration management, CI/CD automation, containerization, Kubernetes orchestration, ingress traffic management, and database integration**.

All deployments are fully automated using **GitHub Webhooks and Jenkins**, ensuring that any code change is automatically built, pushed, and deployed to the Kubernetes cluster.

---

## High-Level Architecture

The system follows a layered DevOps architecture:

1. **Infrastructure as Code**

   * Terraform provisions AWS resources such as VPC, EKS, ECR, EC2, IAM roles, and networking components.
   * Ansible configures EC2 instances with Jenkins, Docker, AWS CLI, kubectl, and required dependencies.

2. **CI/CD Automation**

   * GitHub hosts application and Kubernetes manifests.
   * GitHub Webhook triggers Jenkins automatically on every code push.
   * Jenkins builds Docker images, tags them dynamically, pushes them to ECR, and deploys to EKS.

3. **Container Orchestration**

   * Amazon EKS manages application workloads.
   * Kubernetes Deployments ensure rolling updates with zero downtime.
   * Kubernetes Services expose internal communication.
   * Ingress with AWS Load Balancer Controller exposes the application externally.

4. **Application & Database**

   * PHP Student Registration Application runs in Kubernetes Pods.
   * Application connects to a dedicated database server for persistent data storage.

---

## Architecture Diagram

Add the generated architecture diagram image here:

```
/screenshots/architecture-diagram.png
```

---

## Technology Stack

### Infrastructure & Cloud

* AWS EC2
* Amazon VPC
* Amazon EKS
* Amazon ECR
* IAM Roles and Policies
* Application Load Balancer (ALB)

### DevOps & Automation

* Terraform
* Ansible
* Jenkins
* GitHub Webhooks

### Containers & Orchestration

* Docker
* Kubernetes
* AWS Load Balancer Controller
* Kubernetes Ingress

### Application

* PHP
* Apache
* Database Server (MySQL or compatible)

---

## CI/CD Pipeline Flow

1. Developer pushes code changes to GitHub.
2. GitHub Webhook triggers Jenkins pipeline automatically.
3. Jenkins pipeline performs:

   * Source code checkout
   * Docker image build
   * Dynamic image tagging (build number or commit ID)
   * Push image to Amazon ECR
   * Update Kubernetes deployment
4. Kubernetes performs a rolling update.
5. New pods pull the latest image from ECR.
6. Application is accessible via ALB Ingress endpoint.

---

## Docker Image Tag Automation

To avoid stale deployments, the pipeline uses **dynamic image tags** instead of `latest`.

Example tag format:

```
php-app:${BUILD_NUMBER}
```

This ensures:

* Every build is unique
* Kubernetes always pulls the correct image
* Code changes reflect immediately after deployment

---

## Kubernetes Deployment Strategy

* Rolling updates are enabled by default
* Zero downtime during deployments
* Health checks ensure only healthy pods receive traffic
* Ingress routes traffic via AWS ALB

---

## Project Repository Structure

```
.
├── Dockerfile
├── Jenkinsfile
├── deployment.yaml
├── service.yaml
├── ingress.yaml
├── index.php
├── terraform/
│   ├── main.tf
│   ├── vpc.tf
│   ├── eks.tf
│   └── ecr.tf
├── ansible/
│   ├── install-jenkins.yml
│   ├── install-docker.yml
│   └── setup-tools.yml
└── README.md
```

---

## How to Deploy

### Prerequisites

* AWS account
* IAM user or role with required permissions
* Terraform installed
* Ansible installed
* kubectl configured
* eksctl installed (optional)

### Steps

1. Provision infrastructure using Terraform:

   ```
   terraform init
   terraform apply
   ```

2. Configure Jenkins and tools using Ansible:

   ```
   ansible-playbook install-jenkins.yml
   ```

3. Configure GitHub webhook to Jenkins.

4. Push application code to GitHub.

5. Jenkins automatically builds and deploys the application.

6. Access the application using ALB DNS name.

---

## Key Learnings & Highlights

* End-to-end DevOps automation
* Infrastructure as Code using Terraform
* Configuration management with Ansible
* Production-grade CI/CD using Jenkins
* Secure and scalable Kubernetes deployment
* AWS-native ingress with ALB
* Real-world image versioning strategy

---

## Future Enhancements

* HTTPS with ACM and TLS
* Route 53 DNS mapping
* Secrets management with AWS Secrets Manager
* Monitoring with CloudWatch and Prometheus
* Auto-scaling with HPA

---

## Author

**Govind Kotalwar**

This project is built as a hands-on DevOps learning and production-ready reference implementation.

---

If you want next:

* I can **tailor this README for interviews**
* Or **simplify it for recruiters**
* Or **align it to a resume project description**
