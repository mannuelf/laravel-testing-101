<?php

namespace Tests\Unit;

use App\Product;
use App\Order;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    /** @test **/
    function an_order_consists_of_products()
    {
        $order = $this->createOrderWithProducts();

        $this->assertCount(2, $order->products());
    }

    /** @test **/
    function an_order_can_determine_the_total_cost_of_all_its_products()
    {
        $order = $this->createOrderWithProducts();

        // assert that expected OUTPUT matches the given INPUT
        $this->assertEquals(8800, $order->total());
    }

    protected function createOrderWithProducts()
    {
        $order = new Order;

        $product = new Product('Samsung phone', 7800);
        $product2 = new Product('Sony phone', 1000);


        $order->add($product);
        $order->add($product2);

        return $order;
    }
}
