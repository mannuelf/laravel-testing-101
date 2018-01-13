<?php

use App\Product;
use Tests\TestCase;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProductTest extends TestCase
{
    protected  $product;

    public function setUp()
    {
        // extract the process of newing up a product to its own method
        parent::setUp();
        $this->product = new Product('Sony TV', 59);
    }

    /** @test **/
    public function a_product_has_a_name()
    {

        $this->assertEquals('Sony TV', $this->product->name());
    }

    /** @test **/
    public function a_product_has_a_cost()
    {
        $this->assertEquals(59, $this->product->cost());
    }
}