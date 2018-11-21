<?php
/**
 * Created by PhpStorm.
 * User: Joey
 * Date: 21-11-2018
 * Time: 10:28
 */ ?>


<?php
class Radioprogramma {

    public $programma_naam;
    public $omschrijving;
    public $Liedjes = array();
    public $programma = array();

    public function getLiedjes() {
        $this->Liedjes= array('My name is'.'Lucky me'.'3AM');
    }

    public function getProgramma(){
        $this->programma_naam="SkyRadio";
        $this->omschrijving="nu gratis!";
        $this->programma = Array($programma_naam . $omschrijving);
    }

}

class RadioProgramma_new extends Radioprogramma {
    public $programma_naam2;
}

$radio = NEW Radioprogramma;

print_r($radio->getLiedjes());
print_r($radio->Liedjes);

$radio->getProgramma();
print_r($radio->programma);


?>