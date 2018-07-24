<?php

require_once 'Animal.php';
class Ave extends Animal{

    private $corPena;
    
    public function fazerNinho(){
        echo "<p>Construiu Ninho</p>";
    }

    public function alimentar() {
        echo "<p>Comendo frutas</p>";
    }

    public function emitirSom() {
        echo "<p>Som Ave</p>";
    }

    public function locomover() {
        echo "<p>Voando</p>";
    }
    
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

}