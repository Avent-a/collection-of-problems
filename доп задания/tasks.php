<?php

// Считаем задачи из файла tasks.txt и выводим их в виде списка с чекбоксами
if (file_exists('tasks.txt')) {
    $tasks = file('tasks.txt');

    foreach ($tasks as $task) {
        // Обрезаем лишние пробелы и переносы строки
        $task = trim($task);
        if (!empty($task)) {
            echo "<li><input type='checkbox' name='completed[]' value='$task'>$task</li>";
        }
    }
}

?>
