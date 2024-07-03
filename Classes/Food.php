<?php
require_once __DIR__ . '/Product.php';
class Food extends Product{
private $ingredients;
private $weight;

public function __construct($name, $price, $category, $imgURL, $ingredients, $weight) {
    parent::__construct($name, $price, $category, $imgURL);
    $this->ingredients = $ingredients;
    $this->weight = $weight;
}

public function getIngredients()
{
    return $this->ingredients;
}

public function setIngredients($ingredients)
{
    $this->ingredients = $ingredients;
}

public function getWeight()
{
    return $this->weight;
}

public function setWeight($weight)
{
    $this->weight = $weight;
}
}

?>