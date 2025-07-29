# Activity: Build a Simple CRUD Web App Using HTML and SQL
- Create a basic web application that performs Create, Read, Update, and Delete (CRUD) operations.
- Follow the groupings on our first activity.

## Group 2 Members
1. Basa, Fiona Gene
2. Deodora, Don Jasper
3. Estonilo, Charm Azeneth
4. Palis, Francis Paul
5. Salango, Alyza Mae
6. Yu, Kimberly

-----

## 🔗 Original Source Code

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
* Boostrap

-----
## 📸 Screenshots

| Feature  | Screenshot |
|----------|------------|
| **Login**    | <img src="https://github.com/user-attachments/assets/b8c60627-520b-4266-b35b-f179e0a72af4" width="600" /> |
| **Register** | <img src="https://github.com/user-attachments/assets/22fa94a2-dafd-4396-86d8-7b78ff009098" width="600" /> |
| **Create**   | <img src="https://github.com/user-attachments/assets/6301fac0-68d5-4cb3-8977-404f3247ed38" width="600" /> |
| **Read**     | <img src="https://github.com/user-attachments/assets/56e02f11-7340-4546-93e3-2bb4dd9e50b9" width="600" /> |
| **Update**   | <img src="https://github.com/user-attachments/assets/d755724c-dd57-4069-903a-3f4f5b1c5021" width="600" /> |
| **Delete**   | <img src="https://github.com/user-attachments/assets/118c7ac2-1761-45e3-8f6f-75e959126b4a" width="600" /> |
| **Print**    | <img src="https://github.com/user-attachments/assets/3eb70e59-5c43-48fe-97c0-94130a2ad31b"  width="600" /> |


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
git clone https://github.com/nameispaul/studentcrud.git
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

