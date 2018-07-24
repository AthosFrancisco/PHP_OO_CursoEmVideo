<?php

require_once 'Mamifero.php';
class Canguru extends Mamifero{

    public function locomover() {
        echo "<p>Pula, pula</p>";
    }
    
    public function usarBolsa(){
        echo "<p>Bolsa</p>";
    }
}
