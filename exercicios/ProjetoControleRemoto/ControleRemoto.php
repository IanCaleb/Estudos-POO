<?php 
require_once "Controladora.php";
class ControleRemoto implements Controladora{
    public $cor;
    public $marca;
    public $pilha;
    public $pilhaNecessaria;
    public $volume;
    public $ligado;
    public $tocando;


    //construtor
    public function __construct($c, $m, $p){
        $this->setCor($c);
        $this->setMarca($m);
        $this->setPilha($p);
        $this->setPilhaNecessaria($p);
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }
    //Getters e Setters

    public function getCor(){
        return $this->cor;

    }
    public function setCor($c){
        $this->cor = $c;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($m){
        $this->marca = $m;
    }

    public function getPilha(){
        return $this->pilha;
    }
    public function setPilha($p){
        $this->pilha = $p;
    }
    public function setPilhaNecessaria($p){
        $this->pilhaNecessaria = $p;
    }
    public function getPilhaNecessaria(){
        return $this->pilhaNecessaria;
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

    //Metodos da interface

    public function temEnergia(){
        if ($this->getPilha() == $this->getPilhaNecessaria()){
            return true;
        }
        else 
            return false;
    }

    public function ligar(){
        if ($this->temEnergia()){
            $this->setLigado(true);
        }

    }
    public function desligar(){
        if ($this->temEnergia()){
            $this->setLigado(false);
        }
    }

    public function power(){
        $this->getLigado() ? $this->desligar(): $this->ligar();
    }
    
    public function maisVolume(){
        if($this->temEnergia()){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            }
        }

    }
    public function menosVolume(){
        if($this->temEnergia()){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 5);
            }
        }
    }
    public function ligarMudo(){
        if($this->temEnergia()){
            if($this->getLigado()){
                    $this->setVolume(0);
            }
        }
    }
    public function desligarMudo(){
        if($this->temEnergia()){
            if($this->getLigado()){
                $this->setVolume(50);
            }
        }
    }

    public function mudo(){
        $this->getVolume() == 0 ? $this->desligarMudo() : $this->ligarMudo();
    }
    public function play(){
        if($this->temEnergia()){
            if($this->getLigado()){
                $this->setTocando(true);
            }
        }
    }
    public function pause(){
        if($this->temEnergia()){
            if($this->getLigado()){
                $this->setTocando(false);
            }
        }
    }

    public function reproduzir(){
        $this->getTocando() ? $this->pause() : $this->play();
    }
}
?>