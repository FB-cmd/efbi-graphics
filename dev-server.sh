#!/bin/bash

# EFBI Graphics Local Development Server
# Usage: ./dev-server.sh [port]

PORT=${1:-8000}
HOST="localhost"

echo "🎨 Starting EFBI Graphics Development Server..."
echo "🌐 Server will be available at: http://$HOST:$PORT"
echo "📁 Serving from: $(pwd)"
echo ""
echo "Press Ctrl+C to stop the server"
echo ""

# Check if PHP is installed
if ! command -v php &> /dev/null; then
    echo "❌ PHP is not installed or not in PATH"
    echo "Please install PHP to run the development server"
    exit 1
fi

# Check PHP version
PHP_VERSION=$(php -r "echo PHP_VERSION;")
echo "🐘 PHP Version: $PHP_VERSION"

# Start the server
php -S $HOST:$PORT