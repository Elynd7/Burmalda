<?php
    $size = filesize("folder/world.txt");
    $mb = $size / 1024 / 1024;
    $gb = $size / 1024 / 1024 / 1024;
    echo "Размер файла world.txt:<br>";
    echo "Байт: " . $size . "<br>";
    echo "   Мегабайт: " . number_format($mb, 10, '.', '') . "<br>"; 
    echo "   Гигабайт: " . number_format($gb, 10, '.', '') . "<br>";
?>
