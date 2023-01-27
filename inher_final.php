<?php
// class Alsp Can Be Final => Class Employee cannot extend final class Person
class Person{
 public $name;
 public $surname;
 public $age;
 public $adress;

 public function __construct($n,$s,$a,$ad)
 {
   $this->name = $n;
   $this->surname = $s;
   $this->age = $a;
   $this->adress = $ad;
 }
 final public function get_full_name()
 {
  echo $this->name . " " . $this->surname;
 }

}
class Employee extends Person{
 public $salary;

 public function __construct($n,$s,$a,$ad,$sa)
 {
  Person::__construct($n,$s,$a,$ad);
  $this->salary = $sa;
 }

}
// <========================================================>
$person_1 = new Person('Adil','Bendaoui',21,"Rommani");
echo "<pre>";
print_r($person_1);
$person_1->get_full_name();
echo "</pre>";
echo "<pre><========================================================></pre>";
$person_2 = new Employee('Ousama','ELzero',41,"Cairo",500000);
echo "<pre>";
print_r($person_2);
$person_2->get_full_name();
echo "</pre>";