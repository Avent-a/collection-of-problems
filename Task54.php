<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 20px;
    }
  </style>
  <title>Текущий день недели</title>
</head>
<body>
  <h2>Текущий день недели</h2>
  <?php
    $week = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];

    $current_day = date("w"); // Получить номер текущего дня недели (0 - Воскресенье, 1 - Понедельник, и так далее)
    $current_day_name = $week[$current_day];

    $date_to_check = strtotime("09-06-2003"); // Преобразовать строку с датой в timestamp
    $day_of_week = date("w", $date_to_check);
    $day_of_week_name = $week[$day_of_week];

    echo "<p>Текущий день недели: $current_day_name</p>";
    echo "<p>День недели для 09.06.2003: $day_of_week_name</p>";
  ?>
</body>
</html>
