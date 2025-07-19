<?php
include 'conn.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM tbl_trash WHERE student_id=$id");
header("Location: trash.php");
