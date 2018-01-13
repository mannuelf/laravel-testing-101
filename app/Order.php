<?php

namespace App;

class Order
{

    protected $products = [];

    public function add(Product $product)
    {
        $this->products[] = $product;
    }

    public function products()
    {
        return $this->products;
    }

    public function total()
    {
        // implementation
//        $total = 0;

        // filter through all the products call a cost method on each on and store the result.
//        foreach ($this->products as $product) {
//            $total += $product->cost();
//        }
//
//        return $total;

        // refactor, possibly
        return array_reduce($this->products, function($carry, $product) {
           return $carry + $product->cost();
        });
    }
}