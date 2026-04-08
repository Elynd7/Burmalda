<?php
class Worker {
    public $name;
    private $age;
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

    public function setAge($newAge) {
        if ($newAge >= 18) {
            $this->age = $newAge;
        } else {
            echo "Вам работать в нашей компании еще рано\n";
        }
    }
}

$worker1 = new Worker();
$worker1->name = "Иван Иванов";
$worker1->setAge(25);
$worker1->salary = 50000;

$worker2 = new Worker();
$worker2->name = "Петр Петров";
$worker2->setAge(30);
$worker2->salary = 60000;

echo "Сумма зарплат: " . ($worker1->getSalary() + $worker2->getSalary()) . " руб.<br>";

$worker1->setAge(17);
echo "Возраст после 17: " . $worker1->getAge() . "<br>";
$worker1->setAge(26);
echo "Возраст после 26: " . $worker1->getAge() . "<br>";
?>
