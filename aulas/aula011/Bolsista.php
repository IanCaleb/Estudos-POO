<?php 
require_once 'Aluno.php';

class Bolsista extends Aluno{
    private $bolsa;

    public function getBolsa(){
        return $this->bolsa;
    }
    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }

    public function pagarMensalidade($preco)
    {
        echo'<p> O aluno deve pagar: ' . $preco - $this->getBolsa() . "R$<p/>";
    }
}
?>