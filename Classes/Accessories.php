<?php
require_once __DIR__ . '/Product.php';
class Accessories extends Product
{
    private $material;
    private $dimensions;

    public function __construct($name, $price, $category, $imgURL, $material, $dimensions)
    {
        parent::__construct($name, $price, $category, $imgURL);
        $this->material = $material;
        $this->dimensions = $dimensions;
    }

    public function getmaterial()
    {
        return $this->material;
    }

    public function setmaterial($material)
    {
        $this->material = $material;
    }

    public function getdimensions()
    {
        return $this->dimensions;
    }

    public function setdimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }
}