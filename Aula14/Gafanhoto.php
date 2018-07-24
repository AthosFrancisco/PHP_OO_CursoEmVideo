<?php

require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{

    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->setLogin($login);
        $this->setTotAssistido(0);
    }
    
    private $login;
    private $totAssistido;
    
    public function viuMaisUm(){
        
    }

    public function getLogin() {
        return $this->login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }

}
