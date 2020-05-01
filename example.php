<?php

/*Применил полиморфизм. Считаю, что из SOLID применил принципы S, O и L. Из магических методов использовал
__construct, __get, __set, __toString, __call, __invoke, __unset
*/


abstract class Moto{

    protected $weight, $tank, $maxSpeed, $model, $engine_type;
    private $color, $brand, $wheels;

    abstract protected function addInfo();

    public function __construct($brand, $model, $color, $engine_type, $wheels, $weight, $tank, $maxSpeed){
        $this->brand = $brand;
        $this->model = $model;
        $this->set_color($color);
        $this->set_wheels($wheels);
        $this->set_engine_type($engine_type);
        $this->weight = $weight;
        $this->tank = $tank;
        $this->maxSpeed = $maxSpeed;
    }

    private function set_engine_type($engine_type){
        if($engine_type == 'gasoline'){
            $this->engine_type = $engine_type;
            return true;
        }else{
            echo " !!!Only gasoline!!! ";
            return false;
        }
    }

    private function set_color($color){
        $colors_available = ['red', 'yellow', 'blue', 'green', 'grey', 'black', 'white'];
        if (in_array($color, $colors_available)) {
            $this->color = $color;
            return true;
        } else {
            return false;
        }
    }

    private function set_wheels($wheels){
        $wheels_available = [2, 3, 4];
        if (in_array($wheels, $wheels_available)) {
            $this->wheels = $wheels;
            return true;
        } else {
            return false;
        }
    }

    public function __get($name){
        echo "Произошло обращение к свойству $name =>";
        return $this->$name;
    }

    public function __set($name, $value){
        $this->$name = $value;
        echo "Свойству $name присвоино значение $value";
    }

    public function __toString(){
        return
            "This is " . (get_class($this)) . " " . $this->brand . " " . $this->model . ", " .
            "color is " . $this->color . ", " .
            "engine type is " . $this->engine_type . ", " .
            "weighs " . $this->weight . ' kilograms' . ". " .
            "It can reach a speed of " . $this->maxSpeed . " Km/h" . ", " .
            "tank volume " . $this->tank . ' liters' . ", " .
            "and it has " . $this->wheels . " wheels" . ". <br>".
            $this->addInfo() ."\n";
    }

    public function __call($method_name, $method_args){
        return "Такого метода не существует!";
    }

    public function __invoke(){
        return print($this);
    }

    public function __unset($name){
        echo "Удаление свойства $name \n";
        $this->$name = null;
    }
}


class Motorcycle extends Moto{

    protected function addInfo(){
        return "(Engine capacity 50 cubic centimeters or more)";
    }
}

class Scooter extends Moto{

    protected function addInfo(){
        return  "(Engine capacity no more than 50 cubic centimeters)";
    }
}

class ATV extends Moto{

    protected function addInfo(){
        return "(Has more than 4 wheels)";
    }
}

$YZF = new Motorcycle("Yamaha", "YZF R1", "blue","gasoline", 2, 172,
    18, 300);
$NMAX = new Scooter("Yamaha", "NMAX", "black", "gasoline",2, 127,
    6.6, 102);
$LINHAI = new ATV("Yamaha", "LINHAI", "white", "gasoline",4, 356,
    14.2, 70);

$motoes = [$YZF, $NMAX, $LINHAI];

foreach ($motoes as $moto){
    $moto();
    echo "<br>";
}