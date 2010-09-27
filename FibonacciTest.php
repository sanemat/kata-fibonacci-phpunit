<?php
require_once 'Fibonacci.php';
class FibonacciTest extends PHPUnit_Framework_TestCase
{
  public function testZero()
  {
    $fib = new Fibonacci();
    $this->assertEquals(0, $fib->number(0), '0のとき0であること');
  }
}
?>
