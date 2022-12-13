<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
 * 
 */
class Product
{

    public function __construct(public String $poster, public String $name, public Float $price, public Category $category)
    {
        $this->poster = $poster;
        $this->name = $name;
        $this->type = $price;
        $this->category = $category;
    }

    public function getDetails()
    {
        return "name: $this->name";
    }
}
