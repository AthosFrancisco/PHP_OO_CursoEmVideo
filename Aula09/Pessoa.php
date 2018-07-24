<?php

class Pessoa {

    function __construct($nome, $idade, $sexo) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    private $nome;
    private $idade;
    private $sexo;
    
    public function fazerAniver(){
        $this->setIdade($this->getIdade()+1);
        echo "Feliz Aniversário!!! Parabéns pelos seus ".$this->getIdade()." anos";
    }
    
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }
}
