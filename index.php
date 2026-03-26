<?php
    mkdir("test"); 

    $names = ["papka1", "papka2", "papka3"];
    foreach ($names as $name) {
        mkdir("test/" . $name);
}
?>

