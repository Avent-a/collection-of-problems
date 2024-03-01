<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['task'])) {
        $task = $_POST['task'];

        // Добавляем задачу в файл tasks.txt
        file_put_contents('tasks.txt', $task . PHP_EOL, FILE_APPEND);
    }

    if (isset($_POST['completed'])) {
        $completedTasks = $_POST['completed'];

        // Удаляем выполненные задачи из файла tasks.txt
        $tasks = file('tasks.txt');
        $remainingTasks = array();
        foreach ($tasks as $task) {
            $task = trim($task);
            if (!in_array($task, $completedTasks)) {
                $remainingTasks[] = $task;
            }
        }
        file_put_contents('tasks.txt', implode(PHP_EOL, $remainingTasks));
    }

    // Перенаправляем обратно на главную страницу
    header("Location: index.php");
    exit;
}
?>
