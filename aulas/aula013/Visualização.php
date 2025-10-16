<?php 
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualização{
    private $espectador;
    private $filme;

    public function __construct($espectador, $filme) {
        $this->setEspectador($espectador);
        $this->setFilme($filme);

        $this->espectador->viMaisUm();
        $this->filme->setViews($this->filme->getViews() + 1);
    }
    public function getEspectador() {
        return $this->espectador;
    }

    // Setter para $espectador
    public function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    // Getter para $filme
    public function getFilme() {
        return $this->filme;
    }

    // Setter para $filme
    public function setFilme($filme) {
        $this->filme = $filme;
    }



    
    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorc($porc){
        $nota = $porc;
        if($porc <= 20){
            $this->filme->setAvaliacao(3);
        }
        elseif($porc <= 50){
            $this->filme->setAvaliacao(5);
        }
        elseif($porc <= 90){
            $this->filme->setAvaliacao(8);
        }
        else{
            $this->filme->setAvaliacao(10);
        }
    }
    
}
?>