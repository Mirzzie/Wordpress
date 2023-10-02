# Automated WordPress Deployment with Nginx, LEMP Stack, and GitHub Actions

Guide for automated deployment process for a WordPress website using Nginx as the web server, the LEMP stack (Linux, Nginx, MySQL, PHP), and GitHub Actions for (CI/CD).

## Prerequisites

- A Linux-based server with root access (Ubuntu based recommended).
- A domain name pointed to your server's IP address.
- A GitHub repository containing your WordPress project.

## Step 1: Setting Up the Server

1. **Provision Your Server**: Set up a server on your preferred cloud provider (AWS, DigitalOcean, or Azure). Ensure you have SSH access and that the server meets the system requirements for WordPress.

2. **SSH into Your Server**: Connect to your server using SSH:

   ```bash
   ssh username@your_server_ip
3. **Update system**:

   ```bash
   sudo apt update && sudo apt upgrade
4. **Install LEMP Stack**:

   ```bash
   sudo apt install nginx
   sudo systemctl enable nginx
   ```
    - **Install Mysql**:

      ```bash
       sudo apt install mysql-server
       sudo mysql_secure_installation
      ```
   - **Install PHP and Required extensions**:

      ```bash
       sudo apt install php-fpm php-mysql
      ```
   - **Configuring Nginx**: Note : This configuration may differ according to your cloud provider :

      ```bash
       sudo nano /etc/nginx/sites-available/your_domain
      ```
      ```bash
       server {
           listen 80;
           server_name your_domain.com www.your_domain.com;
           root /var/www/your_domain;
           index index.php;

           location / {
              try_files $uri $uri/ /index.php?$args;
           }
 
           location ~ \.php$ {
              include snippets/fastcgi-php.conf;
              fastcgi_pass unix:/var/run/php/php7.x-fpm.sock;
           }

           location ~ /\.ht {
               deny all;
           }
      }
      ```
       - Save and exit the file, then create a symbolic link to enable the configuration:
     
          ```bash
          sudo ln -s /etc/nginx/sites-available/your_domain /etc/nginx/sites-enabled/
          ```
       - Test Nginx configuration and reload it:
         
         ```bash
          sudo nginx -t
          sudo systemctl reload nginx
         ```
     - **Create Web Root Directory:**:

      ```bash
       sudo mkdir -p /var/www/your_domain
      ```
     - **Set Permissions**:

      ```bash
       sudo chown -R www-data:www-data /var/www/your_domain
       sudo chmod -R 755 /var/www/your_domain
      ```
5. **Installing WordPress**:

    - **Download WordPress: Download the latest version of WordPress to your server**:

      ```bash
      cd /var/www/your_domain
      wget https://wordpress.org/latest.zip
      unzip latest.zip
      ```
    - **Create WordPress Configuration: Create a wp-config.php file**:

      ```bash
      cd /var/www/your_domain
      cp wp-config-sample.php wp-config.php
      sudo nano wp-config.php
      ```
   - **Database Setup: Create a MySQL database and user for WordPress**:

      ```bash
      mysql -u root -p
      CREATE DATABASE wordpress;
      CREATE USER 'wordpressuser'@'localhost' IDENTIFIED BY 'password';
      GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpressuser'@'localhost';
      FLUSH PRIVILEGES;
      EXIT;
      ```
      
   - **Instead If you use my website**:

      ```bash
      cd /var/www/html
      git clone 'this repo link'
      ```
    - **Open Wordpress Dashboard**:
      -  Visit your domain in a web browser to complete the WordPress installation.

5. **Installing WordPress**:

    - **Create a GitHub Repository**: Create a repository for your WordPress project on GitHub :

    - **Configure GitHub Actions**:  Create a .github/workflows/main.yml file in your repository with the following content:
  
        - **Create environment secrects**:  Create these secrets for better security within github:

      ```bash
      name: WordPress Deployment

      on:
       push:
         branches:
            - main # Adjust to the branch you want to trigger deployments from

      jobs:
       deploy:
         runs-on: ubuntu-latest

      steps:
      - name: Checkout code
        uses: actions/checkout@v2

      - name: Configure SSH
        run: |
          mkdir -p ~/.ssh
          echo "$SSH_PRIVATE_KEY" > ~/.ssh/id_rsa
          chmod 600 ~/.ssh/id_rsa
          ssh-keyscan -H ${{ secrets.SSH_HOST }} >> ~/.ssh/known_hosts
        env:
          SSH_PRIVATE_KEY: ${{ secrets.SSH_PRIVATE_KEY }}

      - name: Deploy to DigitalOcean
        run: |
          ssh -i ~/.ssh/id_rsa ${{ secrets.SSH_USER }}@${{ secrets.SSH_HOST }} "cd ${{ secrets.DEPLOY_PATH }} && git pull origin main && sudo systemctl restart nginx"
          
        env:
          SSH_USER: ${{ secrets.SSH_USER }}
          SSH_PRIVATE_KEY: ${{ secrets.SSH_PRIVATE_KEY }}
          SSH_HOST: ${{ secrets.SSH_HOST }}
          DEPLOY_PATH: ${{ secrets.DEPLOY_PATH }}
      ```
   



