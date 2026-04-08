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
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        } else {
            echo "Вам работать в нашей компании еще рано<br>";
        }
    }

    private function checkAge($age) {
        return $age >= 18;
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

$worker1->setAge(16);
echo "Возраст после 16: " . $worker1->getAge() . "<br>";
$worker1->setAge(28);
echo "Возраст после 28: " . $worker1->getAge() . "<br>";
?>
