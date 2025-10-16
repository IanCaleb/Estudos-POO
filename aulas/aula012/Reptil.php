<?php 
require_once 'Animal.php';

class Reptil extends Animal{

    private $corEscama;

    public function getCorEscama(){
        return $this->corEscama;
    }

    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }

    public function locomover(){
        echo "<p>Rateijando...<p/>";

    }
    public function alimentar(){
        echo "<p>Comendo insetos...<p/>";
    }
    public function emitirSom(){
        echo "<p>Som de Reptil!<p/>";
    }
}
?>