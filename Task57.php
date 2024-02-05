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
  </style>
  <title>Непустые депозитные ячейки</title>
</head>
<body>
  <h2>Непустые депозитные ячейки</h2>
  <table>
    <tr>
      <td></td>
      <td>Заполнено</td>
      <td></td>
    </tr>
    <tr>
      <td>Текст</td>
      <td></td>
      <td></td>
    </tr>
    <?php
      // PHP-код для поиска и выделения непустых ячеек
      for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
          echo "<td>Заполнено</td>";
        }
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>
