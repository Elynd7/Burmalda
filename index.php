<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date1 = $_POST['date1'] ?? '';
    $date2 = $_POST['date2'] ?? '';
    
    $ts1 = strtotime($date1);
    $ts2 = strtotime($date2);
    
    if ($ts1 > $ts2) {
        echo "Более поздняя дата: $date1";
    } elseif ($ts2 > $ts1) {
        echo "Более поздняя дата: $date2";
    } else {
        echo "Даты равны";
    }
}
?>

<form method="POST">
    Дата 1 ГГГГ-ММ-ДД: <input type="date" name="date1" required><br>
    Дата 2 ГГГГ-ММ-ДД: <input type="date" name="date2" required><br>
    <input type="submit" value="Сравнить">
</form>
