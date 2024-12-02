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
