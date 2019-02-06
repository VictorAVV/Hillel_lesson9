<?php
/* Сделайте класс User, в котором будут следующие protected поля - 
name (имя), age (возраст), 
public методы setName, getName, setAge, getAge. 
Сделайте класс Worker, который наследует от класса User 
и вносит дополнительное private поле salary (зарплата), 
а также методы public getSalary и setSalary. 
Создайте объект этого класса 'Ivan', возраст 25, зарплата 1000. 
Создайте второй объект этого класса 'Alex', возраст 26, зарплата 2000. 
Найдите сумму зарплат Ivan и Alex. 
Сделайте класс Student, который наследует от класса User 
и вносит дополнительные private поля стипендия, курс, 
а также геттеры и сеттеры для них. */

class User
{
    protected $name;
    protected $age;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }
    public function getAge()
    {
        return $this->age;
    }
}

class Worker extends User
{
    private $salary;

    public function setSalary($salary)
    {
        $this->salary = $salary;
        return $this;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}

$worker1 = new Worker();
//Fluent Interface
$worker1->setName('Ivan')->setAge(25)->setSalary(1000);

$worker2 = new Worker();
//Not Fluent Interface
$worker2->setName('Alex');
$worker2->setAge(26);
$worker2->setSalary(2000);

echo '<h2>';
echo 'Wokers ' . $worker1->getName() . ' and ' . $worker2->getName();
echo '</h2>';
echo 'Sum of salary: ' . ($worker1->getSalary() + $worker2->getSalary());
echo '<p/><hr>';

class Student extends User
{
    private $stipend;
    private $course;

    public function setStipend($stipend)
    {
        $this->stipend = $stipend;
        return $this;
    }
    public function getStipend()
    {
        return $this->stipend;
    }
    public function setCourse($course)
    {
        $this->course = $course;
        return $this;
    }
    public function getCourse()
    {
        return $this->course;
    }
}

$student1 = new Student();
$student1->setName('Vlad')->setAge(19)->setStipend(250)->setCourse(2);

echo '<h2>';
echo 'Student ' . $student1->getName();
echo '</h2>';
echo 'Course: ' . $student1->getCourse() . '. Stipend: ' . $student1->getStipend();
echo '<br>';
