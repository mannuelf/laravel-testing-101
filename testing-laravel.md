# Testing Laravel

[Laravel testing - github](https://github.com/mannuelf/laravel-testing-101)

[Vue testing](https://github.com/mannuelf/vuejstesting)

# Sources
### Full stack Radio 72: Taylor Otwell - Testing Laravel Applications
[Listen here - twice becasue its nice](http://www.fullstackradio.com/72)

### Laracasts
[Watch - testing jargon](https://laracasts.com/series/testing-jargon)

[Watch - testing laravel](https://laracasts.com/series/phpunit-testing-in-laravel)

### PHPUnit
```
./vendor/bin/phpunit
```
### PHPSpec
Allows you to drive out the implimentation while testing

# Unit testing
Simple fast way to test a peice of funcationality, given this INPUT does it match the desired OUTPUT.
low level testing,
dont touch database,
dont query an API
or referenace any colaborators

```php

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

```


# Mocks
Create objects that simulates the bahaviour of real objects in your code i.e 


# Stubs
The stub impliments just enough behaviour to allow the object under test to execute the test.

# Dummies

# Factories







In Laravel 5.4+ testing is done with DUSK uh-oh

Zoomed in
given this input, this is the expected output

Zoomed out
Entering the application like user would, making test for layer of the app

Directory structures
/unit/  for unit tests
/acceptance/ for acceptance testing.
depends on the team though what we decide to do init bro.

Note: So there browser tests use DUSK for that. If doing unit tests use PHPUnit

- write the minimum amount of code to make the test pass... then think about refactor and begin constructing your class to make the test pass

make setup function to new up a Product instance, so that all functions will have access to the product.

Create the test first
Create the data or the field and build out a class from your idea put down

Extract methods
make protected method for re-usable code

write test
make a model
test again

// Given
// When 
// Then

Keep it as close to documentation as possible





# Vue Js testing

https://github.com/mjackson/expect

```
	"expect": "^21.2.1",
    "jsdom": "^11.5.1",
    "jsdom-global": "^3.0.2",
    "mocha": "^4.0.1",
    "mocha-webpack": "^1.0.1",
    "vue-loader": "^13.5.0",
    "vue-template-compiler": "^2.5.10",
    "vue-test-utils": "^1.0.0-beta.7",
    "vuejs": "^2.0.18",
    "webpack": "^3.10.0"
```