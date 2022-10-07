<?php

namespace Lessons;

class Employee
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function checkAge()
    {
        return ($this->age > 18) ? true : false;
    }

    public function showInfo()
    {
        echo "Employee: <br/>";
        echo "Name " . $this->getName() . "<br />";
        echo "Age " . $this->getAge() . "<br />";
        echo "Salary " . $this->getSalary() . "<br />";
    }

    public function doubleSalary()
    {
        $this->salary = $this->salary * 2;
    }
}
