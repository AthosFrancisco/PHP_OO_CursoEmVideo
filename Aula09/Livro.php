<?php

require_once 'Publicacao.php';
require_once 'Pessoa.php';
class Livro implements Publicacao{

    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setLeitor($leitor);
        $this->setAberto(false);
        $this->setPagAtual(0);
    }

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    public function detalhes(){
        echo "<p>O livro ".$this->getTitulo()
        . " escrito por". $this->getAutor()
        . " possui ". $this->getTotPaginas()
        . " páginas</p>";
    }

    public function abrir() {
        echo "Livro Aberto";
        $this->setAberto(true);
        $this->setPagAtual(1);
    }

    public function avancarPag() {
        if($this->getPagAtual()+1 > $this->getTotPaginas()){
            echo "Impossível avançar, Você está na última página!!!";
        }
        else{
            $this->setPagAtual($this->getPagAtual()+1);
            echo "Página atual ".$this->getPagAtual();
        }
    }

    public function fechar() {
        $this->setPagAtual(0);
        echo "Livro Fechado!!";
    }

    public function folhear() {
        
    }

    public function voltarPag() {
        if($this->getPagAtual()-1 <= 0){
            echo "Impossível voltar a página!!";
        }
        else{
            $this->setPagAtual($this->getPagAtual()-1);
            echo "A página atual é ". $this->getPagAtual();
        }
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor(): Pessoa {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor(Pessoa $leitor) {
        $this->leitor = $leitor;
    }
}
