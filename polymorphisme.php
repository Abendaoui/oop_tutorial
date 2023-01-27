<?php
include_once "header.php";

interface DataBase {
 public function connect();
 public function get_users();
 public function create();
 public function update();
 public function delete();
}

class MySql implements DataBase {

 public function connect()
 {
  return 'Connect To DataBase';
 }
 public function get_users()
 {
  return 'Get Users From BD';
 }
 public function create()
 {
  return 'Add New  Users To BD';
 }
 public function update()
 {
  return 'Update Users On BD';
 }
 public function delete()
 {
  return 'Delete Users From BD';
 }
}
class Oracle implements DataBase {

 public function connect()
 {
  return 'Connect To DataBase';
 }
 public function get_users()
 {
  return 'Get Users From BD';
 }
 public function create()
 {
  return 'Add New  Users To BD';
 }
 public function update()
 {
  return 'Update Users On BD';
 }
 public function delete()
 {
  return 'Delete Users From BD';
 }
}

$control = new Oracle();
echo "<pre>";
print_r($control);
echo "</pre>";
echo $control->connect();
echo "<br>";
echo $control->get_users();
echo "<br>";
echo $control->create();
echo "<br>";
echo $control->update();
echo "<br>";
echo $control->delete();