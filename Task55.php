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
  <title>Checkbox PHP</title>
</head>
<body>
  <h2>Checkbox PHP</h2>
  <form method="post">
    <label for="myCheckbox">Отметить</label>
    <input type="checkbox" name="myCheckbox" id="myCheckbox" <?php if (isset($_POST['myCheckbox'])) echo 'checked'; ?>>
    <input type="submit" value="Проверить">
  </form>
  <?php
    $isChecked = isset($_POST['myCheckbox']) ? 'отмечен' : 'не отмечен';
    echo "<p>Checkbox: $isChecked</p>";
  ?>
</body>
</html>
