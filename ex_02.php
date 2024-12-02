<?php

class MyAttribute
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function display()
    {
        echo $this->name . "\n";
    }
}
