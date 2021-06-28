<?php

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    protected $cart;

    protected function setUp(): void
    {
        $this->cart = new Cart();
    }


    protected function tearDown(): void
    {
        Cart::$tax = 1.2;
    }


    /** @test */
    public function the_cart_tax_value_can_be_changed_statically()
    {
        Cart::$tax = 1.5;
        $this->cart->price = 10;
        $netPrice = $this->cart->getNetPrice();

        $this->assertEquals(15, $netPrice);
    }


    public function testCorrectNetPriceIsReturned()
    {

        $this->cart->price = 10;
        $netPrice = $this->cart->getNetPrice();

        $this->assertEquals(12, $netPrice);
    }


    /** @test */
    public function a_type_error_is_thrown_when_trying_to_add_a_non_int_to_the_price()
    {
        try {

            $this->cart->addToPrice('fifteen');

            $this->fail('A TypeError should have been thrown');

        } catch (TypeError $error) {

            $this->assertStringStartsWith('App\Cart::addToPrice():', $error->getMessage());
        }
    }













}