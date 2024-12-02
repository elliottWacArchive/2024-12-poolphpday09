<?php

class Character
{
    private $name;
    private $endurance = 50;
    private $agility = 2;
    private $strength = 2;
    private $mana = 2;
    private const CLASSE = "Character";

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getEndurance()
    {
        return $this->endurance;
    }
    public function getAgility()
    {
        return $this->agility;
    }
    public function getStrength()
    {
        return $this->strength;
    }
    public function getMana()
    {
        return $this->mana;
    }
    public function getClasse()
    {
        return self::CLASSE;
    }
}

class Paladin extends Character
{
    private $endurance = 100;
    private $agility = 8;
    private $strength = 10;
    private $mana = 3;

    public function __construct($name)
    {
        $this->name = $name;
        echo $this->name . ": I’ll engrave my name in the history !\n";
    }
    public function attack()
    {
        echo $this->name . ": I’ll crush you with my hammer !\n";
    }
    public function __destruct()
    {
        echo $this->name . ": Aarrg I can’t believe I’m dead...\n";
    }
}

class Mage extends Character
{
    private $endurance = 70;
    private $agility = 10;
    private $strength = 3;
    private $mana = 10;

    public function __construct($name)
    {
        $this->name = $name;
        echo $this->name . ": May the gods be with me.\n";
    }
    public function attack()
    {
        echo $this->name . ": Feel the power of my magic !\n";
    }
    public function __destruct()
    {
        echo $this->name . ": By the four gods, I passed away...\n";
    }
}
