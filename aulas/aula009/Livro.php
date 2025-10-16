<?php 
require_once 'Publicacao.php';

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->SetPagAtual(1);
        $this->setAberto(false);
        $this->setLeitor($leitor);
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($aberto){
        $this->aberto = $aberto;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($leitor){
        return $this->leitor = $leitor;
    }

    //Metodos implementados
    public function abrir(){
        $this->setAberto(true);
    }
    public function fechar(){
        $this->setAberto(false);
    }
    public function folear(){
        if($this->getAberto()){
            $this->setPagAtual(rand(1, $this->getTotPaginas()));
        }
        else{
            echo"Livro fechado";
        }
    }
    public function abrirPagina($pagina){
        if($this->getAberto()){
            $this->setPagAtual($pagina);
        }
        else{
            echo"Livro fechado";
        }
    }
    public function avancarPag(){
        if($this->getAberto()){
            $this->setPagAtual($this->getPagAtual() + 1);
        }
    }
    public function voltarPag(){
        if($this->getAberto()){
            $this->setPagAtual($this->getPagAtual() -1);
        }
    }

    public function status(){
        echo"<p>Titulo: " . $this->getTitulo() . ".<p/>";
        echo"<p>Autor: " . $this->getAutor() . ".<p/>";
        echo"<p>Total de Paginas: " . $this->getTotPaginas() . ".<p/>";
        echo"<p>Pagina Atual: " . $this->getPagAtual() . ".<p/>";
        echo"<p>Está aberto?: " . $this->getTitulo() ?"Sim" : "Não"  . ".<p/>";
        echo"<p>Leitor: " . $this->getLeitor()->getNome() . ".<p/>";
    }
}
?>