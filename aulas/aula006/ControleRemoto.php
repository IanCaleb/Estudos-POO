<?php 
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    //atributos
    private $volume;
    private $ligado;
    private $tocando;

    //construtor
    public function __construct(){
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    public function getVolume(){
        return $this->volume;
    }

    public function setVolume($v){
        $this->volume = $v;
    }

    public function getLigado(){
        return $this->ligado;
    }

    public function setLigado($l){
        $this->ligado = $l;
    }

    public function getTocando(){
        return $this->tocando;
    }

    public function setTocando($t){
        $this->tocando = $t;
    }

    //Metodos implementados

    public function ligar(){
        $this->setLigado(true);

    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo "Está ligado? " . ($this->getLigado() ? "SIM" : "NÃO" ). "<br/>";
        echo "Está tocando? " . ($this->getTocando() ? "SIM" : "NÃO"). "<br/>";
        echo "Volume:" . $this->getVolume();

        for ($i = 1; $i <= (int)($this->getVolume() / 10); $i++) {
            echo " |";
        }
    }
    public function fecharMenu(){
        echo"Menu fechado";
    }
    public function maisVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
    }
    public function ligarMudo(){
        if($this->getLigado() && $this->getvolume() != 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }

    }
    public function play(){
        if ($this->getLigado() && ! $this->getTocando()){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if ($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }

}

?>