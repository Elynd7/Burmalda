<?php
$filename = 'asdfok.txt';
try {
    $handle = @fopen($filename, 'r');
    if ($handle === false) {
        throw new Exception("Не удалось открыть файл: $filename");
    }
    fclose($handle);
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
