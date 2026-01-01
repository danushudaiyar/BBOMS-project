BBOMS – Blood Bank Management System

A web-based Blood and Organ Donation Management System built with PHP and MySQL. This system allows administrators to manage users, blood and organ stocks, campaigns, requests, and certificates. Regular users can view information, register, and participate in donation events.

Features
Admin Panel

Dashboard overview

Manage users (add, update, delete)

Manage blood groups and organ stocks

Manage donation campaigns

View requests, messages, and certificates

User Panel

Register as a donor

View blood and organ stock availability

Participate in donation events

Contact and communication forms

Technologies Used

Frontend: HTML, CSS, JavaScript, TailwindCSS

Backend: PHP

Database: MySQL

Server: Apache (via XAMPP)

Libraries: Boxicons, Font Awesome

Project Structure
project/
│
├─ admin/             # Admin dashboard and management pages
├─ gd-certificate/    # Certificate-related pages
├─ registerduser/     # User registration and homepage
├─ connection.php     # Database connection
├─ home.css           # CSS for user homepage
├─ vendor/            # PHP libraries (if any)
└─ README.md

Setup Instructions

Install XAMPP: https://www.apachefriends.org/download.html

Copy the project folder into C:\xampp\htdocs\

Open XAMPP Control Panel and start:

Apache

MySQL

Open your browser and navigate to:

http://localhost/project/registerduser/homepage1.html


Import the database:

Go to http://localhost/phpmyadmin/

Create a new database named register

Import register.sql (included in the repo) via Import → Choose File → Go

Check the database connection in connection.php:

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "register";


Start using the project!

Usage
Admin

Access the admin panel: http://localhost/project/admin/indexlogin.php

Login with credentials stored in admintable

Manage users, blood groups, organ stocks, campaigns, and certificates

User

Open the homepage: http://localhost/project/registerduser/homepage1.html

Register or login to participate in donation events

Notes

Make sure XAMPP is running before opening the project in a browser.

All paths are relative to C:\xampp\htdocs\project\. Adjust if moved elsewhere.

This project is for local development only; sensitive credentials like database passwords are stored in plain PHP files.
