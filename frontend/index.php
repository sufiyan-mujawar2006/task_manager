<?php
require_once 'db_connect.php';
$result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dockerized Task Manager</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Docker Task Manager</h2>
        <form action="add_task.php" method="POST">
            <input type="text" name="task" placeholder="Naya task likho..." autocomplete="off">
            <button type="submit">Add Task</button>
        </form>
        <ul>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <li>
                        <span><?php echo htmlspecialchars($row['task_name']); ?></span>
                        <span class="date"><?php echo $row['created_at']; ?></span>
                    </li>
                <?php endwhile; ?>
            <?php else: ?>
                <p style="text-align: center; color: #777;">Koi task nahi hai abhi.</p>
            <?php endif; ?>
        </ul>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>