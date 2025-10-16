<?php 
require_once 'Pessoa.php';

class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistidos;

    public function __construct($nome, $idade, $sexo, $login) {
        $this->setNome($nome); 
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setExperiencia(0);
        $this->setLogin($login);
        $this->setTotAssistidos(0);
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }
    public function getTotAssistidos() {
        return $this->totAssistidos;
    }

    public function setTotAssistidos($totAssistidos) {
        $this->totAssistidos = $totAssistidos;
    }

    public function viMaisUm(){
        $this->setTotAssistidos($this->getTotAssistidos() + 1);
    }
}
?>