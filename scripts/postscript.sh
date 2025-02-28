#!/bin/bash
echo "Running PostScript: Restarting Apache (httpd)..."

# Exit on error
set -e

# Restart httpd service (Apache for Amazon Linux)
sudo systemctl restart httpd

# Check if httpd is running
if systemctl is-active --quiet httpd; then
    echo "Apache (httpd) restarted successfully."
else
    echo "Apache (httpd) failed to restart!" >&2
    exit 1
fi

echo "PostScript completed successfully."
