<?php
$date = date_create('2000-02-03');

date_modify($date, '+1 year +1 month +5 days');
echo "После прибавления: " . date_format($date, 'd.m.Y') . "<br>";

date_modify($date, '-3 days');
echo "После вычитания 3 дней: " . date_format($date, 'd.m.Y'); 
?>
