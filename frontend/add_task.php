<?php
require_once 'db_connect.php'; // Backend folder se connection aayega

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['task'])) {
    $task = $conn->real_escape_string($_POST['task']);
    $sql = "INSERT INTO tasks (task_name) VALUES ('$task')";
    $conn->query($sql);
    header("Location: index.php");
    exit();
}
?>