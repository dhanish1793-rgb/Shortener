Short URL Generator (PHP + MySQL)

A simple URL shortener built with PHP, MySQL, and a small HTML/JS frontend. It converts long URLs into short links using a 6-character code and redirects users automatically.

Setup Instructions
1. Requirements

XAMPP / WAMP / LAMP (Apache + MySQL)

PHP 7+

MySQL or MariaDB

2. Installation

Copy the project folder into your server directory, for example:

C:\xampp\htdocs\


Start Apache and MySQL in XAMPP.

Open phpMyAdmin and create a database named:

shortener


Import shortener.sql into the database.

3. Run the App

Open the frontend:

http://localhost/shortener_clean/index.html


Enter any long URL to generate a short link, such as:

http://localhost/shortener_clean/A1b3Xy

4. How Redirection Works

The .htaccess file rewrites clean URLs (e.g., /A1b3Xy) to:

/api/redirect.php?c=CODE


No query strings shown to the user.
