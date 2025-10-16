<?php 

class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function __construct($m, $c, $p, $ca){
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->carga = $ca;
        $this->tampar();
    }

    public function tampar(){
        $this->tampada = true;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getCor(){
        return $this->cor;
    }
    public function setCor($c){
        $this->cor = $c;
    }

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }

    public function getCarga(){
        return $this->carga;
    }
    public function setCarga($c){
        $this->carga = $c;
    }

    public function getTampada(){
        return $this->tampada;
    }
    public function setTampada($t){
        $this->tampada = $t;
    }
}

?>