<?php

class Lutador {

    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }

    
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    //pese em quilos
    private $peso;
    //leve, médio e pesado
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    public function apresentar(){
        echo "Lutador: ". $this->getNome() .
             "<br/>Origem: ". $this->getNacionalidade().
             "<br/>". $this->getIdade()."anos".
             "<br/>". $this->getAltura()."m de altura".
             "<br/>Pesando: ". $this->getPeso(). " Kg".
             "<br/>Ganhou: ". $this->getVitorias().
             "<br/>Perdeu: ". $this->getDerrotas().
             "<br/>Empatou: ". $this->getEmpates().
             "<br/><br/>";
    }
    
    public function status(){
        echo $this->getNome()." é um peso ".$this->getCategoria().
             "<br/>".$this->getVitorias()." vitórias".
             "<br/>".$this->getDerrotas()." derrotas".
             "<br/>".$this->getEmpates()." empates".
             "<br/><br/>";
    }
    
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }
    
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
    
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }
    
    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        $peso = $this->getPeso();
        if($peso < 52.2){
            $cate = "Inválido";
        }
        elseif($peso <= 70.3){
            $cate = "Leve";
        }
        elseif($peso <= 83.9){
            $cate = "Médio";
        }
        elseif($peso <= 120.2){
            $cate = "Pesado";
        }
        else{
            $cate = "Inválido";
        }
        
        $this->categoria = $cate;
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }
}
