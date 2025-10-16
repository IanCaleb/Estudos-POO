<?php 
require_once 'Animal.php';

class Ave extends Animal{

    private $corPena;

    public function getCorPena(){
        return $this->corPena;
    }
    public function setCorPena($corPena){
        $this->corPena = $corPena;
    }

    public function locomover(){
        echo "<p>Voando...<p/>";
    }

    public function alimentar(){
        echo "<p>Comendo insetos...<p/>";
    }

    public function emitirSom(){
        echo "<p>Som de ave!<p/>";
    }

    public function construirNinho(){
        echo "<p>construindo ninho...<p/>";
    }
}
?>