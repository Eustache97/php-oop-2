<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/Products.php";
/**
 * 
 */
class Food extends Product
{

    public function __construct(public String $poster, public String $name, public Float $price, public Category $category, public String $ingredient, public Int $weight, public String $expiration_date)
    {
        parent::__construct($poster, $name, $price, $category);
        $this->ingredient = $ingredient;
        $this->weight = $weight;
        $this->expiration_date = $expiration_date;
    }

    public function getDetails()
    {
        return "name: $this->name; ingredients: $this->ingredient; weight: $this->weight";
    }
}

class Toy extends Product
{

    public function __construct(public String $poster, public String $name, public Float $price, public Category $category, public String $material)
    {
        parent::__construct($poster, $name, $price, $category);
        $this->material = $material;
    }

    public function getDetails()
    {
        return "name: $this->name; material: $this->material";
    }
}
