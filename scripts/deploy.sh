#!/bin/bash
cd /var/www/html
git pull origin development
sudo systemctl restart httpd

