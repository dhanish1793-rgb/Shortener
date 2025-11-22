# Short URL Generator (PHP + MySQL)
A simple URL shortening application built using PHP, MySQL, and a lightweight HTML/JavaScript frontend.
It converts long URLs into short, clean links (e.g., http://localhost/shortener) and redirects users automatically.


## 🚀 Features
- Generates 6-character short codes
- Clean URLs using .htaccess rewrite rules
- Automatic redirection to the original URL
- Simple frontend for URL submission
- Basic URL validation


## 📁 Project Structure

- `shortener/`
  - `index.html`
  - `db.php`
  - `.htaccess`
  - `shortener.sql`
  - `api/`
    - `shorten.php`
    - `redirect.php`


## Requirements
XAMPP (Apache + MySQL)
PHP 7+
MySQL or MariaDB


## Setup Instructions
### 1. Place the project
Copy the entire folder into your server directory:
C:\xampp\htdocs\


### 2. Start server services
Enable:
Apache
MySQL


### 3. Create the database
Open phpMyAdmin:
http://localhost/phpmyadmin
Create a database:
shortener
Import the file shortener.sql.
This creates table:
short_urls (id, code, long_url, created_at)


### 4. Run the application
Open:
http://localhost/shortener_clean/index.html
Enter a URL → click Shorten → get a short URL like:
http://localhost/shortener/A1b3Xy
