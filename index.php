<?php
    $files = glob("*.jpg");
    echo "Файлы .jpg в текущей папке:<br>";
    if ($files) {
        foreach ($files as $file) {
            echo "   - " . $file . "<br>";
        }
    } else {
        echo "Файлы .jpg не найдены.<br>";
    }

?>

