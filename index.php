<?php
class Worker {
    public $name;
    public $age;
    public $salary;

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSalary() {
        return $this->salary;
    }
}

$worker1 = new Worker();
$worker1->name = "Иван Иванов";
$worker1->age = 25;
$worker1->salary = 50000;

$worker2 = new Worker();
$worker2->name = "Петр Петров";
$worker2->age = 30;
$worker2->salary = 60000;

echo "getName: " . $worker1->getName() . "<br>";
echo "getAge: " . $worker1->getAge() . "<br>";
echo "getSalary: " . $worker1->getSalary() . "<br>";

echo "Сумма зарплат через getSalary: " . ($worker1->getSalary() + $worker2->getSalary()) . " руб.<br>";
echo "Сумма возрастов: " . ($worker1->getAge() + $worker2->getAge()) . " лет";
?>
