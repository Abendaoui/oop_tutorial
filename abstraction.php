<?php
include_once "header.php";
abstract class MakeDevice{
 abstract public function say_hi();
 abstract public function do_something($p);
}
class Device extends MakeDevice{
 public function do_something($p){
  echo 'Do Something '. $p;
 }
 public function say_hi(){
  echo 'Hi';
 }
}
class Iphone extends Device{

}
$device_1 = new Device();
echo "<pre>";
print_r($device_1);
echo "</pre>";
echo $device_1->say_hi();
echo '<br>';
echo $device_1->do_something('lol');
echo "============================================================";
$device_2 = new Iphone();
echo "<pre>";
print_r($device_2);
echo "</pre>";
echo $device_2->say_hi();
echo '<br>';
echo $device_2->do_something('lol');
