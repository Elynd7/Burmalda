<?php

class Worker {
    public $name;
    public $age;
    public $salary;

    public function getName() { return $this->name; }
    public function getAge() { return $this->age; }
    public function getSalary() { return $this->salary; }
}

$worker1 = new Worker();
$worker1->name = "Кулаков Денис"; $worker1->age = 18; $worker1->salary = 3000;

$worker2 = new Worker();
$worker2->name = "Костылев Эдуард"; $worker2->age = 18; $worker2->salary = 1000000;


$totalSalary = $worker1->getSalary() + $worker2->getSalary();
echo "Сумма зарплат: {$totalSalary} руб.<br>";
echo "Сумма возрастов: " . ($worker1->age + $worker2->age) . " лет";


?>
