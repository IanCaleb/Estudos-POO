<?php 

class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta($n){
        $this->numConta = $n;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($d){
        $this->dono = $d;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($s){
        $this->status = $s;
    }

    public function abrirConta($tipo){
        $this->setStatus(true);
        $this->setTipo($tipo);

        $bonus = 0;

        if ($tipo == "cc"){
            $bonus = 50;
        }
        elseif ($tipo == "cp"){
            $tipo = 150;
        }

        $this->setSaldo($bonus);
    }

    public function fecharConta(){
        if($this->getSaldo() > 0){
           echo"Conta com dinheiro";
        }
        elseif($this->getSaldo() < 0){
            echo"Conta em débito";
        }
        else{
             $this->setStatus("false");
        }
    }

    public function depositar($valor){
        if($this->getStatus() == true){
            $this->setSaldo($this->saldo + $valor);
        }
        else{
            echo"A conta está fechada";
        }
    }

    public function sacar($valor){
        if($this->getStatus() == true){
            if($this->getSaldo() >= $valor){
                $this->setSaldo( $this->getSaldo() + $valor);
            }
        }
    }


    public function pagarMEnsalidade(){
        $v = 0;

        if($this->getTipo() == "cc"){
            $v = 12;
        }
        elseif($this->getTipo() == "cp"){
            $v = 20;
        }

        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
        }

    }


}

?>