output "jenkins_public_ip" {
  description = "Public IP of Jenkins EC2 instance"
  value       = aws_instance.jenkins.public_ip
}

output "eks_cluster_name" {
  description = "EKS cluster name"
  value       = aws_eks_cluster.this.name
}

output "eks_cluster_endpoint" {
  description = "EKS cluster API endpoint"
  value       = aws_eks_cluster.this.endpoint
}
