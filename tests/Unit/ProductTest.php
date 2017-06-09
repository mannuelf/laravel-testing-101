<?php

use App\Product;

class ProductTest extends PHPUnit_Framework_TestCase
{
    function testAProductHasName()
    {
        // create a new instance of product.
        $product = new Product('Fallout 4', 100);
        $this->assertEquals('Fallout 4', $product->name());
    }

    function testProductHasPrice()
    {
      $product = new Product('price', 100);
      $this->assertEquals(100, $product->price());
    }
}