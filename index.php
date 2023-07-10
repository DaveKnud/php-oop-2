<?php

require_once("./models/Category.php");
require_once("./models/Product.php");
require_once("./models/Food.php");
require_once("./models/Toy.php");

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

echo "<br>----<br>";

$t1 = new Toy("Nome Gioco", 5, 99, $dogCategory, "Blue");
var_dump($t1);
