<?php
/**
 * Created by PhpStorm.
 * User: mannuelferreira
 * Date: 2018/01/06
 * Time: 16:18
 */

namespace Tests\Unit;

use Tests\TestCase;

class TestClick extends TestCase
{
    public function testClickOfButton()
    {
        $this->visit('/');
        $this->click('Click me');
        $this->see('You\'ve been clicked punk');
    }
}
