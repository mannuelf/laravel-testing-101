<?php

use App\Product;

class ProductTest extends PHPUnit_Framework_TestCase
{
    function testAProductHasName()
    {
        // create a new instance of product.
        $product = new Product('Fallout 4');
        $this->assertEquals('Fallout 4', $product->name());
    }

    function testProductHasPrice()
    {
      $product = new Product('R100');
      $this->assertEquals('R100', $product->price());
    }
}