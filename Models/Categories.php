<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
 * @param String $name
 */
class Category
{

    public function __construct(public String $name)
    {
        $this->name = $name;
    }
}
