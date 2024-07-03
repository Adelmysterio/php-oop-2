<?php

class Category
{
    private $category;

    public function __construct($category)
    {
        if ($category == 'Cane' || $category == 'Gatto' || $category == 'Uccelli' || $category == 'Pesci') {
            $this->category = $category;
        } else {
            return "Errore";
        }
    }
}
