<?php namespace App;

class Product
{
    protected $name;

    protected $price;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    public function price()
    {
      $price = 'R100';
      return $price;
    }
}