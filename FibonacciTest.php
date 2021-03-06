<?php
require_once 'Fibonacci.php';
class FibonacciTest extends PHPUnit_Framework_TestCase
{
  protected $fib;
  protected function setUp()
  {
    $this->fib = new Fibonacci();
  }

  public function testZero()
  {
    $this->assertEquals(0, $this->fib->number(0), '0のとき0であること');
  }
  public function testOne()
  {
    $this->assertEquals(1, $this->fib->number(1), '1のとき1であること');
  }
  public function testTwo()
  {
    $this->assertEquals(1, $this->fib->number(2), '2のとき1であること');
  }
  public function testThree()
  {
    $this->assertEquals(2, $this->fib->number(3), '3のとき2であること');
  }
  public function testTen()
  {
    $this->assertEquals(55, $this->fib->number(10), '10のとき55であること');
  }
  public function testHundred()
  {
    $this->assertTrue(function_exists('bccomp'), 'bccomp関数が使用できること');
    $this->assertTrue(bccomp(354224848179261915075, $this->fib->number(100)) === 0, '100のときすごいおおきいこと');
  }
}
?>
