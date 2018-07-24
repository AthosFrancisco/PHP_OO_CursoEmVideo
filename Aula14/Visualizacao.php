<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao {

    public function __construct($espectador, $filme) {
        $this->setEspectador($espectador);
        $this->setFilme($filme);
        
        $this->getFilme()->setViews($this->getFilme()->getViews()+1);
        $this->getEspectador()->setTotAssistido($this->getEspectador()->getTotAssistido()+1);
    }
    
    private $espectador;
    private $filme;
    
    public function avaliar(){
        $this->getFilme()->setAvaliacao(5);
    }
    
    public function avaliarNota($nota){
        $this->getFilme()->setAvaliacao($nota);
    }
    
    public function avaliarPorc($porcentagem){
        
    }
    
    public function getEspectador(): Gafanhoto {
        return $this->espectador;
    }

    public function getFilme(): Video {
        return $this->filme;
    }

    public function setEspectador(Gafanhoto $espectador) {
        $this->espectador = $espectador;
    }

    public function setFilme(Video $filme) {
        $this->filme = $filme;
    }

}
