<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    // Проверяем, чтобы введенные значения были числами и не пустыми
    if (is_numeric($weight) && is_numeric($height) && $weight > 0 && $height > 0) {
        // Рассчитываем BMI
        $bmi = $weight / ($height * $height);

        // Выводим результат
        echo "Ваш Индекс массы тела (BMI): " . round($bmi, 2);
    } else {
        echo "Пожалуйста, введите корректные значения для веса и роста.";
    }
}
?>
