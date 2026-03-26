<?php
$past = mktime(8, 5, 59, 10, 2, 1990);
$now = time();
$difference = $now - $past;
echo "Разница в секундах: $difference";
?>
