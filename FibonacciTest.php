<?php
require_once 'Fibonacci.php';
class FibonacciTest extends PHPUnit_Framework_TestCase
{
  public function testZero()
  {
    $fib = new Fibonacci();
    $this->assertEquals(0, $fib->number(0), '0のとき0であること');
  }
  public function testOne()
  {
    $fib = new Fibonacci();
    $this->assertEquals(1, $fib->number(1), '1のとき1であること');
  }
  public function testTwo()
  {
    $fib = new Fibonacci();
    $this->assertEquals(1, $fib->number(2), '2のとき1であること');
  }
}
?>
