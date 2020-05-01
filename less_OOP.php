<?php

//class Person{
//
//    public $age, $name, $surname, $gender;
//
//    function get_info($obj){
//        return $obj->name . '' . $obj->surname. "\n";
//    }
//}
//
//$sasha = new Person();
//
//$sasha->age = 17;
//$sasha->name = "Alexandr";
//$sasha->surname = "Svistoplyasov";
//$sasha->gender = 1;
//
//echo $sasha->get_info($sasha);


abstract class Car {

    public $color, $engine_type, $capacity, $brand, $model;//, $year,  $hp, $engine_type, $transmission_type, $drive_unit;

    public function __construct($params){
        list($this->brand, $this->model) = $params;
    }

    public function set_engine_type($type) {
        $this->engine_type = $type;
    }

    public function get_engine_type(){
        return $this->engine_type;
    }

    public function set_capacity($capacity) {
        $this->capacity = $capacity;
    }

    public function get_capacity(){
        return $this->capacity . "L";
    }

    public function get_color() {
        return $this->color;
    }

    public function set_color($color){
        $colors_available = ['red', 'yellow', 'blue', 'green', 'grey', 'black', 'white'];
        if(is_string($color) and in_array($color, $colors_available)) {
            $this->color = $color;
            return true;
        } else {
            return false;
        }
    }

    public function info() {
        return
            'We have ' . $this->brand  . ' ' . $this->model . '. ' .
            'color is ' . $this->get_color() . ", " .
            "engine type is " . $this->get_engine_type()  . ", " .
            "capacity is " . $this->get_capacity() . "\n";
    }
}

class ElectroCar extends Car {

    public function set_engine_type($type){
        if ("ElectroCar" == $type) {
            $this->engine_type = $type;
            return true;
        } else {
            echo "We have only Electro Cars!\n";
            return false;
        }
    }

    public function get_capacity(){
        return $this->capacity . "KW\n";
    }

    public function __construct($params){
        parent::__construct($params);
        $this->set_engine_type('ElectroCar');
    }
}


class HybridCar extends Car {

    public function set_engine_type($type){
        if ("Hybrid" == $type) {
            $this->engine_type = $type;
            return true;
        } else {
            echo "We have only Hybrid Cars!\n";
            return false;
        }
    }

    public function get_capacity(){
        return $this->capacity . "L + some electropower\n";
    }

    public function __construct($params){
        parent::__construct($params);
        $this->set_engine_type('Hybrid');
    }
}



$boomer = new Car(array("BMW", "X5"));
// $boomer->color = 123;
$boomer->set_color('black');
$boomer->set_engine_type('gasoline');
$boomer->set_capacity(4);
echo $boomer->info();

$leafchik = new ElectroCar(array("Nissan", "LEAF"));
$leafchik->set_color('grey');
$leafchik->set_capacity(16);
echo $leafchik->info();

$prius = new HybridCar(array("Toyota", "Prius"));
$prius->set_color('white');
$prius->set_capacity(2);
echo $prius->info();
?>