<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework for Lesson 5</title>
</head>

<body>

    <h5>Заняття 5. Методи</h5>
    <hr>

    <?php

    require_once 'vendor/autoload.php';

    $employee1 = new Lessons\Employee("Jack", 33, 2300);
    $employee1->showInfo();
    echo "Вік більше, або дорівнює 18? " . (($employee1->checkAge()) ? "true " : "false ") . "<br />";
    $employee2 = new Lessons\Employee("Paul", 22, 1300);
    $employee2->showInfo();
    echo "Сума зарплат працівників {$employee1->getName()} та {$employee2->getName()} складає: " . ($employee1->getSalary() + $employee2->getSalary()) . "<br />";

    echo "<hr />";

    $user1 = new Lessons\User();
    $user1->setName("John");
    $user1->setAge(25);
    echo "Ім'я користувача: " . $user1->getName() . "<br />";
    echo "Вік користувача: " . $user1->getAge() . "<br />";
    $user1->setAge(30);
    echo "Вік користувача: " . $user1->getAge() . "<br />";

    echo "<hr />";

    $employee3 = new Lessons\Employee("Rick", 19, 1100);
    $employee3->showInfo();
    $employee3->doubleSalary();
    $employee3->showInfo();

    echo "<hr />";

    $rect = new Lessons\Rectangle(30, 50);
    $rect->Info();
    echo "Періметр прямокутника: " . $rect->getPerimeter() . "<br />";
    echo "Площа прямокутника: " . $rect->getSquare();

    echo "<hr />";

    ?>

</body>

</html>