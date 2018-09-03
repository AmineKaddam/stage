<?php
abstract class Animal
{
    public function breath()
    {
        return 'I breath oxygen found in the air using my nose.';
    }
}

class Dog extends Animal implements Canine, Mammal
{
    private $name;
    private $gender;

    public function __construct($name, $gender)
    {
        $this->setName($name);
        $this->setGender($gender);
    }

    private function setName($name)
    {
        $this->name = (string) $name;
    }

    private function setGender($gender)
    {
        if ($gender === self::GENDER_MALE || $gender === self::GENDER_FEMALE) {
            $this->gender = $gender;
        } else {
            throw new InvalidArgumentException('Mammals can only be male or female');
        }
    }

    public function getGender()
    {
        return $this->gender();
    }

    public function eat()
    {
        return 'I eat meat.';
    }

    public function bark()
    {
        return 'Woof, woof!';
    }

    public function howl()
    {
        return 'AHROOOOOOO WOO WOOO!';
    }

    public function isMale()
    {
        return $this->gender === self::GENDER_MALE;
    }

    public function isFemale()
    {
        return $this->gender === self::GENDER_FEMALE;
    }
}

class Fish extends Animal
{
    final public function breath()
    {
        return 'I breath oxygen found in the water using my gills.';
    }
}

 ?>
