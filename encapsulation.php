<?php
class Person{
 public $name;
 public $surname;
 private $lock;
 protected $adress;

 public function set_lock($lock)
 {
  if(gettype($lock) === 'string' && strlen($lock) >= 8){
   $this->lock = $lock;
  }
  else{
   echo 'SomeThing Went Wrong With Password';
  }
 }
 public function update_lock($old_lock,$new_lock)
 {
  if($old_lock === $this->lock){
     if(gettype($new_lock) === 'string' && strlen($new_lock) >= 8){
     $this->lock = $new_lock;
    }
    else{
     echo 'SomeThing Went Wrong With Password';
    }
  }
  else{
   echo 'Old Is Wrong';
  }
 }



}
$person_1 = new Person();
$person_1->set_lock('Adil2001');
echo "<pre>";
print_r($person_1);
echo "</pre>";
$person_1->update_lock('Adil2001',"adiladil");
echo "<pre>";
print_r($person_1);
echo "</pre>";