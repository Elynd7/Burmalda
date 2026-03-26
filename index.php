<?php
$countries = ['Spain' => 'Madrid', 'Russia' => 'Moscow'];
$key = 'Germany';

try {
    if (!array_key_exists($key, $countries)) {
        throw new Exception("Ключ '$key' не существует в массиве");
    }
    echo $countries[$key];
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
