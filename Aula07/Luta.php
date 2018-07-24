<?php

require_once 'Lutador.php';
class Luta {
    
    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovado;
    
    public function marcarLuta(Lutador $l1, Lutador $l2){
        if(($l1->getCategoria() == $l2->getCategoria()) && ($l1 != $l2)){
            $this->setAprovado(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
            echo "<p>Luta Marcada com sucesso!!!!</p>";
        }
        else{
            $this->setAprovado(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
            echo "<p>Luta recusada!</p>";
        }
    }
    
    public function lutar(){
        if($this->getAprovado()){
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            
            $vencedor = rand(0, 2);
            
            switch ($vencedor){
                case 0: //EMPATE
                    echo "EMPATE";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    break;
                case 1://DESAFIADO GANHA LUTA
                    echo "O VENCEDOR É: ".$this->getDesafiado()->getNome();
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    break;
                case 2://DESAFIANTE GANHA LUTA
                    echo "O VENCEDOR É: ".$this->getDesafiante()->getNome();
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->ganharLuta();
                    break;
                default :
                    echo "opção inválida";
            }
        }
        else{
            echo "Luta não pode acontecer";
        }
    }
            
    function getDesafiante(): Lutador {
        return $this->desafiante;
    }

    function getDesafiado(): Lutador {
        return $this->desafiado;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovado() {
        return $this->aprovado;
    }

    function setDesafiante(Lutador $desafiante) {
        $this->desafiante = $desafiante;
    }

    function setDesafiado(Lutador $desafiado) {
        $this->desafiado = $desafiado;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovado($aprovado) {
        $this->aprovado = $aprovado;
    }
}
