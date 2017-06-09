<?php

use App\Product;

class ProductTest extends PHPUnit_Framework_TestCase
{

    protected $product;

    // setup method to DRY up tests
    public function setUp() {
      $this->product = new Product('Fallout 4', 100);
    }

    /** @test **/
    function a_product_has_name()
    {
        // create a new instance of product.
        $this->assertEquals('Fallout 4', $this->product->name());
    }

    /** @test **/
    function a_product_has_price()
    {
      $this->assertEquals(100, $this->product->price());
    }
}