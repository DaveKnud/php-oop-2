<?php
class Product
{
    private $name;
    private $weight;
    private $price;

    public function __construct($name, $weight, $price)
    {
        $this->setName($name);
        $this->setWeight($weight);
        $this->setPrice($price);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}

$p1 = new Product("Prod1", 10, 100);
var_dump($p1);
