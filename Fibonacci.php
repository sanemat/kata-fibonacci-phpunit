<?php
class Fibonacci{
  private $stored = array();
  public function number($number)
  {
    if ($number === 0) {
      $this->stored[$number] = 0;
      return 0;
    } elseif ($number === 1){
      $this->stored[$number] = 1;
      return 1;
    }
    $fibonacciNumber = self::number($number - 2) + self::number($number - 1);
    $this->stored[$number] = $fibonacciNumber;
    return $fibonacciNumber;
  }
}
?>
