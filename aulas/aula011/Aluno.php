<?php 
require_once 'Pesssoa.php';

class Aluno extends Pesssoa{
    private $matricula;
    private $curso;
    
    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setIdade($curso){
        $this->curso = $curso;
    }
    public function pagarMensalidade($preco){
        echo'<p> O aluno deve pagar: ' . $preco . "R$<p/>";
    }
}
?>