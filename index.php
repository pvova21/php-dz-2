<?php
// Функция для проверки, что значение - целое число
function isInteger($value) {
    return is_numeric($value) && ctype_digit(str_replace(',', '.', $value));
}

// Ввод чисел
$number1 = readNumber("Введите первое число: ");
$number2 = readNumber("Введите второе число: ");

// Проверка деления на ноль
if ($number2 == 0) {
    fwrite(STDERR, "Делить на 0 нельзя\n");
} else {
    // Выполнение деления и вывод результата
    $result = $number1 / $number2;
    echo "Результат деления: $result\n";
}

// Функция для проверки и ввода числа
function readNumber($prompt) {
    do {
        echo $prompt;
        $input = trim(fgets(STDIN));
        $input = str_replace(',', '.', $input);

        if (!is_numeric($input)) {
            fwrite(STDERR, "Введите, пожалуйста, число\n");
        } elseif (!isInteger($input)) {
            fwrite(STDERR, "Введите, пожалуйста, целое число\n");
        } else {
            return (float) $input;
        }
    } while (true);
}
?>
