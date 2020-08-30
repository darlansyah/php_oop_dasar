<?php
class ContohStatic {
  public static $angka = 10;

  public function hello(){
    return "hello ".self::$angka++;
  }
}
echo ContohStatic::$angka;
echo "<br/>";
echo ContohStatic::hello();
echo "<br/>";
echo ContohStatic::hello();
echo "<br/>";
echo ContohStatic::hello();
 ?>
