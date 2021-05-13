<?php
use Parno\loket\pricitac;
final class pricitacTest extends PHPUnit\Framework\TestCase{
    public function testSettersAndGetters(){
        $p = new pricitac;
        $p -> setx(8);
        $p -> sety(8);
        $this -> assertSame($p -> getx(),8);
        $this -> assertSame($p -> gety(),8);
    }
    public function testnasobeni(){
        $p = new pricitac;
        $p -> setx(8);
        $p -> sety(8);
        $vysledek = $p -> nasobeni();
        $this -> assertSame(64,$vysledek);

    }
    public function testdeleni(){
        $p = new pricitac;
        $p -> setx(8);
        $p -> sety(8);
        $vysledek = $p -> deleni();
        $this -> assertSame(1,$vysledek);

    }
}