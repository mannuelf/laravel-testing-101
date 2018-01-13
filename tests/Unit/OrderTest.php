<?php

namespace Tests\Unit;

use App\Product;
use App\Order;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    /** @test **/
    public function an_order_consists_of_products()
    {
        $order = new Order;

        $product = new Product('Samsung phone', 7800);
        $product2 = new Product('Sony phone', 1000);


        $order->add($product);
        $order->add($product2);

        $this->assertEquals(2, count($order->products()));
        $this->assertCount(2, $order->products());

    }
}
