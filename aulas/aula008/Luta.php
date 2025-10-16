<?php 

require_once "Lutador.php";

class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function getDesafiado(){
        return $this->desafiado;
    }
    public function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }
    public function getDesafiante(){
        return $this->desafiante;
    }
    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }
    public function getRounds(){
        return $this->rounds;
    }
    public function setRounds($rounds){
        $this->rounds = $rounds;
    }
    public function getAprovada(){
        return $this->aprovada;
    }
    public function setAprovada($aprovada){
        $this->aprovada = $aprovada; 
    }
    
    public function marcarLuta($l1, $l2){
        if ($l1->getCategoria() === $l2->getCategoria()){
            if ($l1 != $l2){
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            }
        }
        else{
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    public function lutar(){
        if ($this->getAprovada()){
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();

            $vencedor = rand(0,2);

            switch($vencedor){
                case 0:
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    echo "<p>O lutador " . $this->getDesafiado()->getNome() . " Ganhou a luta!<p/>";
                    break;
                case 1:
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->ganharLuta();
                    echo "<p>O lutador " . $this->getDesafiante()->getNome() . " Ganhou a luta!<p/>";
                    break;
                case 2:
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    echo "<p>A luta acabou empate!<p/>";
                    break;
            }
        }
        else{
            echo "<p>Luta não pode acontecer<p/>";
        }

    }

}
?>