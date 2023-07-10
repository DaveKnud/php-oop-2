<?php

class Category
{
    private $icon;
    private $name;

    public function __construct($icon, $name)
    {
        $this->setIcon($icon);
        $this->setName($name);
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
};

class Product
{
    private $name;
    private $weight;
    private $price;
    private Category $category;

    public function __construct($name, $weight, $price, Category $category)
    {
        $this->setName($name);
        $this->setWeight($weight);
        $this->setPrice($price);
        $this->setCategory($category);
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

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }
}

class Food extends Product
{
    private $expireDate;

    public function __construct($name, $weight, $price, Category $category, $expireDate)
    {
        parent::__construct($name, $weight, $price, $category);
        $this->setExpireDate($expireDate);
    }

    public function getExpireDate()
    {
        return $this->expireDate;
    }

    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;
    }
};

$dogCategory = new Category("CaneIcon", "Cane");
var_dump($dogCategory);

$catCategory = new Category("gattoIcon", "gatto");
var_dump($catCategory);

echo "<br>-----<br>";

$p1 = new Product("Prod1", 10, 100, $dogCategory);
var_dump($p1);

echo "<br>----<br>";

$f1 = new Food("Nome Cibo", 5, 40, $dogCategory, "10?10?2022");
var_dump($f1);
