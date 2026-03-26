<?php
$now = time();
$currentYear = date('Y', $now);
$newYear = mktime(0, 0, 0, 1, 1, $currentYear + 1);

$secondsLeft = $newYear - $now;
$daysLeft = floor($secondsLeft / (60 * 60 * 24));

echo "До Нового Года осталось дней: $daysLeft";
?>
