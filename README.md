🚀 WordPress Docker Setup with Contact Form 7
A ready-to-use Dockerized WordPress development environment with pre-configured MySQL and automatic plugin setup.

📋 Prerequisites
Docker installed

Docker Compose (usually comes with Docker Desktop)

Git (optional)

🛠️ Quick Start
1. Clone the repository (if not already done)
2. git clone https://github.com/Furqan-A-H/York-Dental-Theme.git
3. cd York-Dental-Theme

2. Start the Docker containers
3. docker-compose up -d

4. 3. Access WordPress
Open in your browser: http://localhost:8000

Complete the WordPress installation wizard

🔌 Automatic Contact Form 7 Installation
After WordPress is running, automatically install Contact Form 7 with:

bash
docker-compose exec wordpress wp plugin install contact-form-7 --activate



🌐 Environment Details
WordPress URL: http://localhost:8000

Database Host: db (inside Docker network)

MySQL Port: 3306 (external access at 3307)

PHP Version: 8.2

WordPress Version: 6.8

📂 File Structure
text
.
├── themes/          # Your custom themes (mounted to WordPress)
├── plugins/         # Your custom plugins (mounted to WordPress)
├── docker-compose.yml  # Docker configuration
└── README.md        # This file


⚙️ Configuration
WordPress Environment Variables:
Database: wordpress

User: wpuser

Password: wp123

MySQL Credentials:
Root Password: rootpass

Port: 3307 (external), 3306 (internal)

🛑 Stopping the Environment
bash
docker-compose down


🚧 Troubleshooting
Common Issues:
Port conflicts: Change 8000:80 or 3307:3306 in docker-compose.yml

Permission errors: Run sudo chmod -R 777 themes plugins (Linux/Mac)

Plugin not installing: Check WordPress is fully installed first

🔄 Updating
To update WordPress and MySQL images:

bash
docker-compose pull
docker-compose up -d
