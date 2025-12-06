# Authentication-System-
🔐 PHP Authentication System (Register • Login • Dashboard • Logout)












A lightweight and secure User Authentication System built with PHP, MySQL, and Session Handling.
Includes User Registration, Login, Dashboard Access Control, and Logout Functionality.


✨ Features
✔ User Registration

Creates a new user account

Validates input fields

Stores user data in MySQL database

✔ User Login

Verifies email & password

Starts secure session

Redirects to dashboard

✔ Protected Dashboard

Only logged-in users can access

Displays profile information

Includes logout button

✔ Secure Logout

Ends active session

Redirects back to login

✔ Clean UI

Styled using your uploaded style.css file 

style

Simple

Professional

Responsive-friendly layout


📂 Project Structure
/auth-system
│── db.php
│── index.php        → Login Page
│── register.php     → Registration Page
│── dashboard.php    → Protected User Dashboard
│── logout.php       → Ends session
│── style.css        → UI Styling
│── README.md


🗄️ Database Setup

Run the following SQL:

CREATE DATABASE auth_system;

USE auth_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


⚙️ Configure Database Connection

Edit db.php:

$conn = new mysqli("localhost", "root", "", "auth_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


🚀 How to Run the Project

1️⃣ Move the project to your local server

For XAMPP:

htdocs/auth-system/


For WAMP:

www/auth-system/

2️⃣ Start Apache & MySQL servers

3️⃣ Visit the project:
http://localhost/auth-system/

4️⃣ Create a new account via register.php

5️⃣ Login through index.php

6️⃣ Access the secure dashboard (dashboard.php)

7️⃣ Logout using the logout button


🔐 Security Notes

Uses PHP Sessions to protect dashboard

DB queries can be upgraded to Prepared Statements

Recommended: Replace password storage with password_hash() & password_verify()

Backend validation recommended in production


📌 Future Enhancements

JWT-based API

Forgot Password / Email OTP

Admin Panel

Profile update page

Two-Factor Authentication


🤝 Contributing

Contributions are welcome!

Fork this repository

Create a new branch

Commit improvements

Open a Pull Request
