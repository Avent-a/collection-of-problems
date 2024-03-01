<?php

function savePassword($password) {
    $file = 'passwords.txt';
    if (!file_exists($file)) {
        $handle = fopen($file, 'w') or die("Cannot create file: $file");
        fclose($handle);
    }
    $current = file_get_contents($file);
    $current .= $password . "\n";
    file_put_contents($file, $current);
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Генератор паролей</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #666;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = isset($_POST['length']) ? $_POST['length'] : 8;
    $upperCase = isset($_POST['uppercase']) ? $_POST['uppercase'] : false;
    $lowerCase = isset($_POST['lowercase']) ? $_POST['lowercase'] : false;
    $numbers = isset($_POST['numbers']) ? $_POST['numbers'] : false;
    $symbols = isset($_POST['symbols']) ? $_POST['symbols'] : false;

    if (!$upperCase && !$lowerCase && !$numbers && !$symbols) {
        echo "<div class='container'>";
        echo "<h1>Ошибка:</h1>";
        echo "<p>Необходимо выбрать хотя бы один тип символов.</p>";
        echo "<a href='javascript:history.go(-1)'>Назад</a>";
        echo "</div>";
        exit();
    }

    if ($length < 4) {
        echo "<div class='container'>";
        echo "<h1>Ошибка:</h1>";
        echo "<p>Длина пароля должна быть не менее 4 символов.</p>";
        echo "<a href='javascript:history.go(-1)'>Назад</a>";
        echo "</div>";
        exit();
    }

    $password = generatePassword($length, $upperCase, $lowerCase, $numbers, $symbols);
    savePassword($password);

    echo "<div class='container'>";
    echo "<h1>Ваш пароль:</h1>";
    echo "<p>$password</p>";
    echo "<a href='javascript:history.go(-1)'>Сгенерировать еще</a>";
    echo "</div>";
}

function generatePassword($length, $upperCase, $lowerCase, $numbers, $symbols) {
    $chars = '';
    if ($upperCase) $chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if ($lowerCase) $chars .= 'abcdefghijklmnopqrstuvwxyz';
    if ($numbers) $chars .= '0123456789';
    if ($symbols) $chars .= '!@#$%^&*()-_';

    $password = '';
    $charsLength = strlen($chars) - 1;
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, $charsLength)];
    }
    return $password;
}

?>
<div class="container">
    <h1>Генератор паролей</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="length">Длина пароля:</label>
        <input type="number" id="length" name="length" min="4" max="32" value="8">
        <label><input type="checkbox" name="uppercase" value="1" checked> Включить заглавные буквы</label>
        <label><input type="checkbox" name="lowercase" value="1" checked> Включить строчные буквы</label>
        <label><input type="checkbox" name="numbers" value="1" checked> Включить цифры</label>
        <label><input type="checkbox" name="symbols" value="1"> Включить символы</label>
        <button type="submit">Сгенерировать</button>
    </form>
</div>
</body>
</html>
