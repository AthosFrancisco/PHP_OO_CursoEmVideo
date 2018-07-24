<?php

require_once 'Animal.php';
class Mamifero extends Animal{

    private $corPele;
    
    public function alimentar() {
        echo "<p>Mamando</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Mamífero</p>";
    }

    public function locomover() {
        echo "<p>Correndo</p>";
    }
    
    public function getCorPele() {
        return $this->corPele;
    }

    public function setCorPele($corPele) {
        $this->corPele = $corPele;
    }

}
