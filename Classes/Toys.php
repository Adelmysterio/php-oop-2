<?php
require_once __DIR__ . '/Product.php';
class Food extends Product
{
    private $specific;
    private $dimensions;

    public function __construct($name, $price, $category, $imgURL, $specific, $dimensions)
    {
        parent::__construct($name, $price, $category, $imgURL);
        $this->specific = $specific;
        $this->dimensions = $dimensions;
    }

    public function getspecific()
    {
        return $this->specific;
    }

    public function setspecific($specific)
    {
        $this->specific = $specific;
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
