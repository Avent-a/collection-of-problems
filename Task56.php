<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    table {
      border-collapse: collapse;
    }

    td {
      border: 1px solid black;
      padding: 8px;
    }

    .empty-cell {
      background-color: lightgrey; /* Цвет фона для пустых ячеек */
    }
  </style>
  <title>Пустующие депозитные ячейки</title>
</head>
<body>
  <h2>Пустующие депозитные ячейки</h2>
  <table>
    <tr>
      <td></td>
      <td>Заполнено</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <?php
      // PHP-код для поиска и выделения пустых ячеек
      $totalEmptyCells = 0; // Переменная для подсчета общего количества пустых ячеек
      for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
          // Генерация случайных чисел для имитации заполненных и пустых ячеек
          $randomValue = rand(0, 1); 
          if ($randomValue == 0) {
            echo "<td class='empty-cell'></td>"; // Вывод пустой ячейки с классом для стилизации
            $totalEmptyCells++; // Увеличение счетчика общего количества пустых ячеек
          } else {
            echo "<td>Заполнено</td>";
          }
        }
        echo "</tr>";
      }
      // Вывод строки с общим количеством пустых ячеек
      echo "<tr><td colspan='3'>Общее количество пустых ячеек: $totalEmptyCells</td></tr>";
    ?>
  </table>
</body>
</html>
