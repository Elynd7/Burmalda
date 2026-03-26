<?php
    $size = filesize("folder/world.txt");
    $mb = $size / 1024 / 1024;
    $gb = $size / 1024 / 1024 / 1024;
    echo "Размер файла world.txt:<br>";
    echo "Байт: " . $size . "<br>";
    echo "Мегабайт: " . $mb . "<br>";
    echo "Гигабайт: " . $gb . "<br>";
?>
