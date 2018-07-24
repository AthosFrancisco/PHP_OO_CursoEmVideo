<?php

require_once 'Mamifero.php';
class Cachorro extends Mamifero{

    public function enterrarOsso(){
        echo "<p>Osso enterrado</p>";
    }
    
    public function abanarRabo(){
        echo "<p>Abanando rabo</p>";
    }
}
