<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form action="add_task.php" method="POST">
            <input type="text" name="task" placeholder="Add a new task" required>
            <button type="submit">Add Task</button>
        </form>
        <form action="add_task.php" method="POST">
            <button type="submit" name="completed">Mark Completed</button>
            <ul>
                <?php include 'tasks.php'; ?>
            </ul>
        </form>
    </div>
</body>
</html>
