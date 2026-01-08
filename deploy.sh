#!/bin/bash

# EFBI Graphics Deployment Script
# Usage: ./deploy.sh [environment]
# Environments: staging, production

set -e

ENVIRONMENT=${1:-staging}
TIMESTAMP=$(date +"%Y%m%d_%H%M%S")
BACKUP_DIR="backups"

echo "🚀 Starting deployment for EFBI Graphics..."
echo "Environment: $ENVIRONMENT"
echo "Timestamp: $TIMESTAMP"

# Create backup directory if it doesn't exist
mkdir -p $BACKUP_DIR

# Function to deploy via FTP (customize with your credentials)
deploy_ftp() {
    echo "📤 Deploying via FTP..."
    
    # Example FTP deployment (replace with your actual FTP details)
    # You'll need to install lftp: brew install lftp
    
    read -p "FTP Host: " FTP_HOST
    read -p "FTP Username: " FTP_USER
    read -s -p "FTP Password: " FTP_PASS
    echo
    read -p "Remote directory: " REMOTE_DIR
    
    # Exclude sensitive files and directories
    EXCLUDE_LIST="
    --exclude .git/
    --exclude .DS_Store
    --exclude node_modules/
    --exclude backups/
    --exclude deploy.sh
    --exclude .env
    --exclude *.log
    "
    
    lftp -c "
    open ftp://$FTP_USER:$FTP_PASS@$FTP_HOST
    lcd $(pwd)
    cd $REMOTE_DIR
    mirror --reverse --delete --verbose $EXCLUDE_LIST ./
    bye
    "
}

# Function to deploy via rsync (for servers with SSH access)
deploy_ssh() {
    echo "📤 Deploying via SSH/rsync..."
    
    read -p "SSH Host: " SSH_HOST
    read -p "SSH User: " SSH_USER
    read -p "Remote directory: " REMOTE_DIR
    
    rsync -avz --delete \
        --exclude '.git/' \
        --exclude '.DS_Store' \
        --exclude 'node_modules/' \
        --exclude 'backups/' \
        --exclude 'deploy.sh' \
        --exclude '.env' \
        --exclude '*.log' \
        ./ $SSH_USER@$SSH_HOST:$REMOTE_DIR
}

# Run composer install for production
echo "📦 Installing production dependencies..."
composer install --no-dev --optimize-autoloader

# Choose deployment method
echo "Choose deployment method:"
echo "1) FTP"
echo "2) SSH/rsync" 
echo "3) Manual (just prepare files)"
read -p "Selection (1-3): " DEPLOY_METHOD

case $DEPLOY_METHOD in
    1)
        deploy_ftp
        ;;
    2)
        deploy_ssh
        ;;
    3)
        echo "📋 Files are ready for manual deployment."
        echo "Upload all files except:"
        echo "  - .git/"
        echo "  - .DS_Store"
        echo "  - backups/"
        echo "  - deploy.sh"
        ;;
    *)
        echo "❌ Invalid selection"
        exit 1
        ;;
esac

echo "✅ Deployment completed successfully!"
echo "🌐 Your EFBI Graphics website should now be live!"

# Restore development dependencies
composer install