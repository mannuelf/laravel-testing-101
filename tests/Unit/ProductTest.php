<?php

use App\Product;
use Tests\TestCase;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProductTest extends TestCase
{

    /**
     *
     */
    public function testProductHasName()
    {
        $product = new Product('Sony TV');
        $this->assertEquals('Sony TV', $product->name());
    }
}