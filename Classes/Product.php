<?php

class Product
{
    private $name;
    private $price;
    private $category;
    private $imgURL;

    public function __construct($name, $price, $category, $imgURL)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->imgURL = $imgURL;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
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

    public function setCtegory($category)
    {
        $this->category = $category;
    }

    public function getimgURL()
    {
        return $this->imgURL;
    }

    public function setimgURL($imgURL)
    {
        $this->imgURL = $imgURL;
    }
}
