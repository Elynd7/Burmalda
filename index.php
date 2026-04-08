<?php
class Worker {
    public $name;
    public $age;
    public $salary;
}

$worker1 = new Worker();
$worker1->name = "Иван Иванов";
$worker1->age = 25;
$worker1->salary = 50000;

$worker2 = new Worker();
$worker2->name = "Петр Петров";
$worker2->age = 30;
$worker2->salary = 60000;

echo "Сумма зарплат: " . ($worker1->salary + $worker2->salary) . " руб.\n";
echo "Сумма возрастов: " . ($worker1->age + $worker2->age) . " лет\n";
?>
