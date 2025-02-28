#!/bin/bash
echo "Running PostScript: Restarting Apache..."

# Exit on error
set -e

# Restart Apache
sudo systemctl restart apache2

# Check if Apache is running
if systemctl is-active --quiet apache2; then
    echo "Apache restarted successfully."
else
    echo "Apache failed to restart!" >&2
    exit 1
fi

echo "PostScript completed successfully."
