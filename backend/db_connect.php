<?php
$host = "mysql_db"; // Docker service name
$user = "root";
$pass = "rootpassword";
$dbname = "student_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>