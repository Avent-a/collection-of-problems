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

    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
    }
  </style>
  <title>Отображение данных в виде таблицы</title>
</head>
<body>
  <h2>Данные в виде таблицы</h2>
  <table>
    <tr>
      <th>ФИО</th>
      <th>Возраст</th>
      <th>Пол</th>
      <th>Образование</th>
    </tr>
    <?php
      $data = [
        ["Иванов Иван Иванович", 25, "М", "Высшее"],
        ["Петров Петр Петрович", 30, "М", "Среднее"],
        ["Сидорова Анна Васильевна", 22, "Ж", "Высшее"],
        // Добавьте свои данные
      ];

      foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $value) {
          echo "<td>$value</td>";
        }
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>
