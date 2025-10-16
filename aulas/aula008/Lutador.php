<?php 

class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //Construtor

public function __construct($n, $na, $i, $a, $p, $v, $d, $e){
    $this->setNome($n);
    $this->setNacionalidade($na);
    $this->SetIdade($i);
    $this->setAltura($a);
    $this->SetPeso($p);
    $this->setVitorias($v);
    $this->setDerrotas($d);
    $this->setEmpates($e);
}
public function getNome() {
    return $this->nome;
}

public function setNome($nome) {
    $this->nome = $nome;
}

public function getNacionalidade() {
    return $this->nacionalidade;
}

public function setNacionalidade($nacionalidade) {
    $this->nacionalidade = $nacionalidade;
}

public function getIdade() {
    return $this->idade;
}

public function setIdade($idade) {
    $this->idade = $idade;
}

public function getAltura() {
    return $this->altura;
}

public function setAltura($altura) {
    $this->altura = $altura;
}

public function getPeso() {
    return $this->peso;
}

public function setPeso($peso) {
    $this->peso = $peso;
    $this->setCategoria();
}

public function getCategoria() {
    return $this->categoria;
}

public function setCategoria() {
    if ($this->getPeso() < 52.2 or $this->getPeso() >120.2){
        $this->categoria = "Inválido";
    }
    elseif ($this->getPeso() <= 70.3){
        $this->categoria = "Leve";
    }
    elseif ($this->getPeso() <= 83.9){
        $this->categoria = "Médio";
    }
    elseif ($this->getPeso() <= 120.2){
        $this->categoria = "Pesado";
    }
}

public function getVitorias() {
    return $this->vitorias;
}

public function setVitorias($vitorias) {
    $this->vitorias = $vitorias;
}

public function getDerrotas() {
    return $this->derrotas;
}

public function setDerrotas($derrotas) {
    $this->derrotas = $derrotas;
}

public function getEmpates() {
    return $this->empates;
}

public function setEmpates($empates) {
    $this->empates = $empates;
}

//Metodos

public function ganharLuta(){
    $this->setVitorias($this->getVitorias() + 1);
}

public function perderLuta(){
    $this->setDerrotas($this->getDerrotas() + 1);
}
public function empatarLuta(){
    $this->setEmpates($this->getEmpates() +1);
}

public function apresentar(){
    echo"<p>---------------------------<p/>";
    echo "Lutador: " . $this->getNome() . "<br/>";
    echo "Origem: " . $this->getNacionalidade() . "<br/>";
    echo $this->getIdade() . " anos<br/>";
    echo $this->getAltura() . "m de altura<br/>";
    echo "Pesando " . $this->getPeso() . "Kg<br/>";
    echo "Ganhou: " . $this->getVitorias() . " Lutas<br/>";
    echo "Perdeu: " . $this->getDerrotas() . " Lutas<br/>";
    echo "Empatou: " . $this->getEmpates() . " Lutas<br/>";
}

public function status(){
    echo"<p>---------------------------<p/>";
    echo $this->getNome();
    echo " É um lutador peso " . $this->getCategoria() . " ";
    echo $this->getVitorias() . " Vitórias, ";
    echo $this->getDerrotas() . " Derrotas e ";
    echo $this->getEmpates() . " Empates.";
}

}    
?>