<?php
class AppleDevice {
 public  $ram ;
 public  $inch;
 public  $storage;
 public  $color;

 public function __construct($r = "1GB",$i = "4",$s = "16GB",$c = "Black")
 {
  $this->ram = $r;
  $this->inch = $i;
  $this->storage = $s;
  $this->color = $c;
 }

}
$apple = new AppleDevice('3GB','6',"128GB","White");
echo "<pre>";
print_r($apple);
echo "</pre>";

echo "<pre><===========================> <===========================></pre>";

$apple_2 = new AppleDevice('6GB','7.4',"256GB","Gold");
echo "<pre>";
print_r($apple_2);
echo "</pre>";

echo "<pre><===========================> <===========================></pre>";

$apple_3 = new AppleDevice();
echo "<pre>";
print_r($apple_3);
echo "</pre>";
