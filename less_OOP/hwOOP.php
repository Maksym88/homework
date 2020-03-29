<?php

class Animals{

    public $mammals, $reptiles, $amphibians, $fish, $birds, $insects;

    public function get_info(){
        return $this->mammals. ' ' . $this->reptiles. "\n";
    }
}

class Mammals extends Animals{

    public $hare, $proboscidean, $rodents, $opossum;

    protected $predatory;

    public function set_predatory($predatory){
        $this->predatory = $predatory;
    }

    public function get_predatory(){
        return $this->predatory ? $this->predatory. "\n" : "not a predator". "\n";
    }

    public function get_info(){
        return parent::get_info(). "predatory: ". $this->get_predatory();
    }

}

class Cat extends Mammals {

    public $color, $nickname;

    protected $species;

    public function set_species($species){
        $this->species = $species;
    }

    public function get_species(){
        return $this->species ? $this->species. "\n" : "mongrel". "\n";
    }

    public function get_info(){
        return parent::get_info(). "species: " . $this->get_species();
    }
}

$anim = new Animals();
$anim->mammals = "Predator";
$anim->reptiles = "snakes";
$anim->amphibians = "frog";
$anim->fish = "shark";
$anim->birds = "eagle";
$anim->insects = "bee";
echo $anim->get_info();
echo "<br>";

$pred = new Mammals();
$pred->hare = "hare";
$pred->set_predatory("Lion");
$pred->proboscidean ="elephant";
$pred->opossum ="opossum";
$pred->rodents = "hamster";
echo $pred->get_info();
echo "<br>";

$tom = new Cat();
$tom->color = "gray";
$tom->set_species("british fold");
$tom->nickname = "Tom";
echo $tom->get_info();






















?>