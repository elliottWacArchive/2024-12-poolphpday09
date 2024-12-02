<?php

class MyTinyCalculator
{
    private $a;
    private $b;
    private $result;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setA($a)
    {
        $this->a = $a;
    }

    public function setB($b)
    {
        $this->b = $b;
    }

    public function setResult($result)
    {
        $this->result = $result;
    }

    public function add()
    {
        $res = $this->a + $this->b;
        $this->result = $res;
        return $res;
    }

    public function subtract()
    {
        $res = $this->a - $this->b;
        $this->result = $res;
        return $res;
    }

    public function multiply()
    {
        $res = $this->a * $this->b;
        $this->result = $res;
        return $res;
    }

    public function divide()
    {
        $res = $this->a / $this->b;
        $this->result = $res;
        return $res;
    }

    public function showResult()
    {
        return $this->result;
    }
}
