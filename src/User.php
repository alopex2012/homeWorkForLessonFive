<?php

namespace Lessons;

class User
{
    private $name;
    private $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($age > 18) {
            $this->age = $age;
        } else {
            $this->age = 18;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}
