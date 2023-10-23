<!DOCTYPE html>
<html>
<head>
    <title>Результат деления</title>
</head>
<body>
    <h1>Результат деления</h1>
    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
    
        if (is_numeric($number1) && is_numeric($number2) && is_int((int) $number1) && is_int((int) $number2)) {
            $number1 = (int) $number1;
            $number2 = (int) $number2;
    
            if ($number2 == 0) {
                echo "Делить на 0 нельзя.";
            } else {
                $result = $number1 / $number2;
                echo "Результат деления: $result";
            }
        } else {
            echo "Введите, пожалуйста, целые числа.";
        }
    }
    ?>
</body>
</html>

