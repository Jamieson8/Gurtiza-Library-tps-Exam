# 📘 Library-TPS Exam

## 📌 Description / Overview
The **Library TPS Exam** is a web-based Library Management System built using **HTML, CSS, PHP, and MySQL**.  
It allows students to manage their personal details, while librarians or administrators can manage books and authors.

The system supports full **CRUD operations** (Create, Read, Update, Delete) across all modules, offering an organized and efficient library record management solution.

---

## 🎯 Objectives
- Design and develop a functional library management system using PHP and MySQL  
- Allow students to easily add, edit, and delete personal details  
- Help administrators efficiently manage books and authors  
- Demonstrate CRUD implementation as part of the midterm examination  
- Integrate Git and GitHub for version control and documentation  

---

## 🚀 Features / Functionality

### 👩‍🎓 Student Management
- Add, edit, delete, and view student records

### 📚 Book Management
- Manage book titles, categories, and assigned authors

### ✍️ Author Management
- Add, edit, delete, and assign authors to books

### 🔍 Search Functionality
- Search students, books, or authors by keywords

### 🖥️ User-Friendly UI
- Simple, clean, and easy-to-navigate HTML/CSS interface

### 🔧 Version Control
- Repository managed using Git & GitHub  

---

## 🛠️ Installation Instructions (No Laravel)

### **1. Clone the Repository**
```bash
git clone https://github.com/Jamieson8/Gurtiza-Library-tps-Exam
```

### **2. Open the Project Folder**
```bash
cd Gurtiza-Library-tps-Exam
```

### **3. Import the Database**
1. Open **phpMyAdmin**  
2. Create a new database (e.g., `library_db`)  
3. Import the provided **.sql** file inside the repository  

### **4. Configure Database Connection**
Edit your PHP configuration file:

```php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "library_db";

$conn = mysqli_connect($host, $user, $pass, $db);
```

### **5. Run the Project**
Move the project folder to:

- `htdocs` (for XAMPP)  
- `www` (for WAMP)

Start the server:

- Run **Apache**
- Run **MySQL**

Open the project in your browser:

```
http://localhost/Gurtiza-Library-tps-Exam
```

---

## ▶️ Usage
- Log in as student or admin  
- Use **Student Management** to add/edit information  
- Navigate to **Books** to manage book records  
- Add or assign authors  
- Save and modify records using CRUD operations  

---

## 🧩 Code Snippet (PHP)

### Sample PHP code for inserting student information
```php
<?php
include("connection.php");

if(isset($_POST['submit'])) {
    $studentNumber = $_POST['studentNumber'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mi = $_POST['mi'];
    $email = $_POST['email'];
    $contact = $_POST['contactNumber'];
    $section = $_POST['section_id'];

    $query = "INSERT INTO students (studentNumber, lname, fname, mi, email, contactNumber, section_id)
              VALUES ('$studentNumber', '$lname', '$fname', '$mi', '$email', '$contact', '$section')";

    mysqli_query($conn, $query);
}
?>
```

---

## 👨‍💻 Contributor
**Mr. Gurtiza, Jazzver Jamieson O.**

---

## 📄 License
For **academic purposes only**.
