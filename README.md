# Activity: Build a Simple CRUD Web App Using HTML and SQL
- Create a basic web application that performs Create, Read, Update, and Delete (CRUD) operations.
- Follow the groupings on our first activity.

-----

## Original Source Code

This project is based on the tutorial series:

* **[PHP Tutorials](https://www.youtube.com/playlist?list=PLZy3ZnuAwXl7U0HdBpLoY6ssNNBOQIDoW).** Directed by ProgrammingVlogs
    * [PHP Part 1 Simple Login & Register System using MYSQL and PHP](https://www.youtube.com/watch?v=xyf_VJHzSD0&list=PLZy3ZnuAwXl7U0HdBpLoY6ssNNBOQIDoW&index=1)
    * [PHP Part 2(1) Simple CRUD System with Reporting using MYSQL and PHP (CREATE & READ)](https://www.youtube.com/watch?v=GFWKAkNji2U&list=PLZy3ZnuAwXl7U0HdBpLoY6ssNNBOQIDoW&index=2)
    * [PHP Part 2(2) SIMPLE CRUD w/ Report Printing USING PHP, MYSQL, and BOOTSTRAP(EDIT, DELETE, UPDATE,) ](https://www.youtube.com/watch?v=nlUHr1wd9Bc&list=PLZy3ZnuAwXl7U0HdBpLoY6ssNNBOQIDoW&index=3)
-----

## 🚀 Features

* Login
* Register
* Logout
* CRUD
* Print

-----
## 📸 Screenshots

| Feature  | Screenshot |
|----------|------------|
| **Login**    | <img src="https://github.com/user-attachments/assets/06c4ab6b-a952-4302-b9af-4289dcc8617c" width="600" /> |
| **Register** | <img src="https://github.com/user-attachments/assets/c101e059-fe91-433c-8190-0255eca65656" width="600" /> |
| **Create**   | <img src="https://github.com/user-attachments/assets/d142c4a2-cb04-475f-953b-f9b970f01fac" width="600" /> |
| **Read**     | <img src="https://github.com/user-attachments/assets/506fac89-8ece-41f4-a57a-0975f22aad98" width="600" /> |
| **Update**   | <img src="https://github.com/user-attachments/assets/d191d314-12c9-4788-a341-48ca0ae2bf88" width="600" /> |
| **Delete**   | <img src="https://github.com/user-attachments/assets/f02afc12-4f67-4a2b-a705-d6439611d74d" width="600" /> |

-----

## ⚙️ Requirements

Before you begin, ensure you have the following installed:

  * **XAMPP** (or any PHP server with MySQL/MariaDB)
  * **PHP 7.4+**
  * **MySQL 5.7+** or **MariaDB**
  * A modern web browser

-----

## 🛠️ Setup Instructions

Follow these steps to get the application running on your local machine:

### 1\. 📥 Clone or Download

Get the project files by cloning the repository or downloading the ZIP:

```bash
git clone https://github.com/yourusername/studentcrud.git
```

### 2\. 📁 Place in XAMPP `htdocs`

Move the entire `studentcrud` folder into your XAMPP `htdocs` directory (e.g., `C:\xampp\htdocs\studentcrud\`).

### 3\. 🧱 Create the Database

1.  Open **phpMyAdmin** in your browser (usually `http://localhost/phpmyadmin`).
2.  Click on the **"Import"** tab.
3.  Choose the `studentcrud.sql` file from your project folder.
4.  Click **"Go"** to import the database. This will create the `studentcrud` database, along with `tbl_user` and `tbl_student` tables, pre-filled with sample data.

### 4\. 🔗 Configure Database Connection

Open `conn.php` and verify that the database credentials match your local setup. The default settings are usually correct for XAMPP:

```php
<?php
$host = "localhost";
$db_username = "root";
$db_password = ""; // Often empty for XAMPP
$db_name = "studentcrud";

$conn = mysqli_connect($host, $db_username, $db_password, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
```

### 5\. ▶️ Run the Application

1.  Start **Apache** and **MySQL** services in your XAMPP control panel.
2.  Open your web browser and navigate to:
    `http://localhost/studentcrud/login.php`

-----

## 🔐 Default User Logins

You can use these credentials to log in immediately, or register a new user:

| Username | Password | Full Name     |
| :------- | :------- | :------------ |
| `admin`  | `admin`  | Admin Admin   |
| `sample` | `sample` | Sample Sample |

-----

