<?php
class Fibonacci{
  public function number($number)
  {
    if ($number === 0) {
      return 0;
    } elseif ($number === 1){
      return 1;
    }
    return self::number($number - 2) + self::number($number - 1);
  }
}
?>
