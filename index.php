<?php
$a = 10;
$b = 0;

try {
    if ($b == 0) {
        throw new Exception("Деление на ноль невозможно!");
    }
    $result = $a / $b;
    echo "Результат: $result";
} catch (Exception $ex) {
    $message = date('Y-m-d H:i:s') . " - Ошибка: " . $ex->getMessage() . PHP_EOL;
    file_put_contents('log.txt', $message, FILE_APPEND);
    echo $ex->getMessage();
}
?>
