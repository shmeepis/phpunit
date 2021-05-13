<?php
namespace Parno\loket;

class pricitac{
    private $x;
    private $y;
    public function setx($x){
        $this->x = $x;
        return $this;
    }
    public function getx(){
        return $this->x;
    }
    public function sety($y){
        $this->y = $y;
        return $this;
    }
    public function gety(){
        return $this->y;
    }
    public function nasobeni(){
        $vysledek = $this -> x * $this -> y;
        return $vysledek;  
    }
    public function deleni(){
        $vysledek = $this -> x / $this -> y;
        return $vysledek;  
    }
}