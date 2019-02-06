<?php
/* Сделайте класс Worker, в котором будут следующие public поля - 
name (имя), age (возраст), salary (зарплата). 
Создайте объект этого класса, 
затем установите поля в следующие значения (не в __construct, а для созданного объекта) - имя 'John',
возраст 25, зарплата 1000. 
Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', 
возраст 26, зарплата 2000. 
Выведите на экран сумму зарплат Ивана и Васи. 
Выведите на экран сумму возрастов Ивана и Васи. */

class Worker
{
    public $name;
    public $age;
    public $salary;
}

$worker1 = new Worker();
$worker1->name = 'John';
$worker1->age = 25;
$worker1->salary = 1000;

$worker2 = new Worker();
$worker2->name = 'Вася';
$worker2->age = 26;
$worker2->salary = 2000;

echo '<h2>';
echo 'Wokers ' . $worker1->name . ' and ' . $worker2->name;
echo '</h2>';
echo 'Sum of salary: ' . ($worker1->salary + $worker2->salary);
echo '<br>';
echo 'Sum of age: ' . ($worker1->age + $worker2->age);
