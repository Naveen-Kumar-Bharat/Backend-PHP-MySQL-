#README

Project Title: Travel Form

Description: This project consists of a web form that collects user information for a USA trip. It utilizes PHP to handle form submissions and store data in a MySQL database.

Files:

index.php: Main PHP file containing form logic and database interactions.
style.css: Stylesheet for basic styling.
app.js (optional): JavaScript file for additional functionality (if applicable).
Setup:

Install XAMPP: Download and install XAMPP from https://www.apachefriends.org/index.html.
Start Apache and MySQL: Launch XAMPP Control Panel and start the Apache and MySQL modules.
Place Files: Create a folder named "travel" within the "htdocs" folder of your XAMPP installation. Place all project files within this folder.
Database Setup:

Create Database:
Access phpMyAdmin (usually at http://localhost/phpmyadmin).
Create a new database named "google".
Create Table:
Within the "google" database, create a table named "trip" with the following columns:
id (int, auto-increment, primary key)
name (varchar(50))
age (int)
gender (varchar(10))
email (varchar(50))
phone (varchar(20))
other (text)
dt (timestamp)
Accessing the Form:

Open Browser: Open a web browser and navigate to http://localhost/travel/index.php.
Fill Form and Submit: Fill out the form fields and click "Submit".
View Success Message: Upon successful submission, a success message will appear.
Data Storage: Submitted data will be stored in the MySQL database.
Additional Notes:

Ensure XAMPP is running whenever you want to access the form.
For production environments, consider using a web hosting service with MySQL support.
Implement proper security measures to protect sensitive data in a production environment.
