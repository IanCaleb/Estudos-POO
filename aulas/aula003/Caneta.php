<?php 

class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;


        
    public function rabiscar(){
        if(!$this->tampada){
            echo"<p>Estou escrevendo</p>";
        }
        else{
            echo"<p>Erro: Está tampada</p>";
        }
    }

    private function tampar(){
        $this->tampada = true;
    }

    private function destampar(){
        $this->tampada = false;
    }


}