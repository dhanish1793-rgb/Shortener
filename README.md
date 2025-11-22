Short URL Generator (PHP + MySQL)

A simple and clean URL shortener built with PHP, MySQL, and a lightweight HTML/JavaScript frontend.
It converts long URLs into short, easy-to-share links like:

http://localhost/shortener_clean/abc123

✨ Features

Generate short URLs (6-character codes)

Clean short links using .htaccess rewrite rules

Automatic redirection to the original URL

Frontend form for quick URL shortening

URL validation (prevents invalid/empty input)

📁 Project Structure
shortener_clean/
 ├─ index.html
 ├─ db.php
 ├─ .htaccess
 ├─ shortener.sql
 └─ api/
      ├─ shorten.php
      └─ redirect.php

🛠 Requirements

XAMPP / WAMP / LAMP (Apache + MySQL)

PHP 7+

MySQL or MariaDB

🚀 Setup Instructions
1. Place the project in your server

Copy the entire folder into:

C:\xampp\htdocs\


or the equivalent folder on your environment.

2. Start XAMPP

Enable:

Apache

MySQL

3. Create the database

Go to:
http://localhost/phpmyadmin

Create a database named:

shortener


Import the file shortener.sql into this database.

This will create a table:

short_urls (id, code, long_url, created_at)

4. Test the app

Open:

http://localhost/shortener_clean/index.html


Enter a URL → click Shorten → you’ll get a link like:

http://localhost/shortener_clean/A1b3Xy

🔀 URL Rewriting

The .htaccess file handles clean URLs.
It converts:

/A1b3Xy


into:

/api/redirect.php?c=A1b3Xy


No long query strings needed.

📡 API Endpoints
POST /api/shorten.php

Request body:

{
  "url": "https://example.com"
}


Response:

{
  "shortUrl": "http://localhost/shortener_clean/A1b3Xy"
}
