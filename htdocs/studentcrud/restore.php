<?php
include 'conn.php';
$id = $_GET['id'];

$student = mysqli_query($conn, "SELECT * FROM tbl_trash WHERE student_id=$id");
$data = mysqli_fetch_assoc($student);

mysqli_query($conn, "INSERT INTO tbl_student (student_id, full_name, email, address, contact_no)
                     VALUES ('$data[student_id]', '$data[full_name]', '$data[email]', '$data[address]', '$data[contact_no]')");

mysqli_query($conn, "DELETE FROM tbl_trash WHERE student_id=$id");

header("Location: trash.php");
