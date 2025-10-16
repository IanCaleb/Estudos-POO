<?php 
require_once 'Mamifero.php';

class Canguru extends Mamifero{
    public function locomover(){
        echo "<p>Saltando...<p/>";
    }
    public function alimentar(){
        echo"<p>Mamando...<p/>";
    }
    public function usarBolsa(){
        echo"<p>Usando bolsa...<p/>";
    }
}
?>