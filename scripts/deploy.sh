#!/bin/bash

# Update system packages
sudo yum update -y

# Install Apache (httpd), PHP, and MySQL client
sudo yum install -y httpd php php-mysql mariadb

# Enable and start Apache (httpd)
sudo systemctl enable httpd
sudo systemctl start httpd

# Deploy website files
sudo rm -rf /var/www/html/*
sudo git clone https://github.com/tishmanoni/country.git /var/www/html/
sudo chown -R apache:apache /var/www/html
sudo chmod -R 755 /var/www/html

echo "Deployment completed successfully."
