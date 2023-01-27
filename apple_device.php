<?php
class AppleDevice {
 public  $ram = "1GB";
 public  $inch = "4";
 public  $storage = "16GB";
 public  $color = "Black";
 public $owner_name = 'Device';

 //const
 const MINCHAR = 3;

 public function on_buuton()
 {
  echo "Your Phone Is Running";
 }
 public function get_info()
 {
  echo "<pre>";
  echo "Ram : $this->ram".'<br>';
  echo "Surface : $this->inch".'<br>';
  echo "Storage : $this->storage".'<br>';
  echo "Color : $this->color".'<br>';
  echo "Owner Name : $this->owner_name".'<br>';
  echo "</pre>";
 }
 public function set_name($name)
 {
  if(strlen($name) >= self::MINCHAR){
   $this->owner_name = $name;
  }
 }
}
$apple = new AppleDevice();
$apple->ram = "2GB";
$apple->inch = "5.4";
$apple->storage = "32GB";
$apple->color = "Silver";
$apple->set_name('Adil');
$apple->get_info();
echo "<pre>";
print_r($apple);
echo "</pre>";
echo AppleDevice::MINCHAR;
echo '<br>';
echo $apple::MINCHAR;
echo '<hr>';

$apple_2 = new AppleDevice();
$apple_2->ram = "4GB";
$apple_2->inch = "6.4";
$apple_2->storage = "64GB";
$apple_2->color = "Gold";
$apple_2->set_name('ali');
$apple_2->get_info();
echo "<pre>";
print_r($apple_2);
echo "</pre>";

echo '<hr>';
$apple_3 = new AppleDevice();
echo "<pre>";
print_r($apple_3);
echo "</pre>";
$apple_3->set_name('Ou');
$apple_3->get_info();
