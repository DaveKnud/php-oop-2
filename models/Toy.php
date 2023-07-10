<?php

class Toy extends Product
{
    private $color;

    public function __construct($name, $weight, $price, Category $category, $color)

    {
        parent::__construct($name, $weight, $price, $category);
        $this->setColor($color);
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}
