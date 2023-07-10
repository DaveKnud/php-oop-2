<?php

require_once("./models/Category.php");
require_once("./models/Product.php");
require_once("./models/Food.php");
require_once("./models/Toy.php");

$dogCategory = new Category("CaneIcon", "Cane");
$catCategory = new Category("gattoIcon", "gatto");
$p1 = new Product("Prod1", 10, 100, $dogCategory);

$foods = [
    $f1 = new Food("Cibo cane", 8, 55, $dogCategory, "10/10/2022"),
    $f2 = new Food("Cibo gatto", 5, 40, $catCategory, "10/10/2022"),
];

$toys = [
    $t1 = new Toy("Toy 1", 5, 99, $catCategory, "Blue"),
    $t2 = new Toy("Toy 2", 2, 20, $catCategory, "Blue")
];
