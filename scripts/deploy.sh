#!/bin/bash
sudo apt update -y
sudo apt install -y apache2 php php-mysql mysql-client
sudo systemctl enable apache2
sudo systemctl start apache2

# Deploy website files
sudo rm -rf /var/www/html/*
sudo git clone https://github.com/YOUR_GITHUB_USERNAME/YOUR_REPOSITORY.git /var/www/html/
sudo chown -R www-data:www-data /var/www/html
sudo chmod -R 755 /var/www/html

# Restart Apache
sudo systemctl restart apache2
