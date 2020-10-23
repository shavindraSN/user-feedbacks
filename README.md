# user-feedbacks
This application will take feedbacks from users and display about different products

This application is only to demonstrate Terraform infrastructure automation and application deployment.

## Application Functionality
1. User Registration
2. User Login
3. This application get Name of user, a Name of a product and the feedback description and save them to a Database
4. Display feedbacks submitted by users

## Technology Stack
1. **Laravel** framework for application
2. **PHP**
3. **MySQL** for the Database
4. **AWS Beanstalk** for deploying application
5. **Terraform** to automate Infrastructure provisioning 

## How to Get Started
This sections will explains how this projects is setup on your local machine and start development

First You have to fullfill following prerequisits
1. Install PHP, Apache and MySQL.
 - For MacOS Catelinafollow this guide (https://jasonmccreary.me/articles/install-apache-php-mysql-mac-os-x-catalina/)
 - For Ubuntu 18.04 follow this guide (https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04)
- For Windows Install XAMPP from this link (https://www.apachefriends.org/index.html)

Project Setup Guide
1. Clone the Repository
2. Create a Database in MySQL
3. Open Project with a prefered Code Editor
4. Edit the .env file. If this file is hidden unhide files from your system preferences.
5. Add values for following attribute in .env file according to the DB you have created
    1. `DB_DATABASE`
    2. `DB_USERNAME`
    3. `DB_PASSWORD`
6. Naviate to the repository using the prefered commandline tool. Then execute following commands
    1. To Create the Tables required run `php artisan migrate`
    2. To Start the development server run `php artisan serve`
7. Open your prefered browser and navigate to ***localhost:8000***