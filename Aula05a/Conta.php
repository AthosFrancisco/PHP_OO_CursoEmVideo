<?php

class Conta {

    private static $contagemConta = 0;
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    function __construct() {
        static::$contagemConta++;
        $this->numConta = static::$contagemConta;
        $this->status = false;
        $this->saldo = 0;
    }

    public function abrirConta($tipo) {
        $this->status = true;
        $this->tipo = $tipo;
        
        echo "<p>Aberto conta do tipo $tipo</p>";

        if ($this->tipo == "CC") {
            $this->saldo += 50;
        } elseif ($this->tipo == "CP") {
            $this->saldo += 150;
        }
    }

    public function fecharConta() {
        if ($this->saldo > 0){
            echo "favor sacar o saldo";
        }
        elseif ($this->saldo < 0){
            echo "favor quitar débito";
        }
        else{
            $this->status = false;
            echo "<p>conta fechada com sucesso!</p>";
        }
    }

    public function depositar($valor) {
        if($this->status == true){
            $this->saldo += $valor;
        }else{
            echo "<p>Não é possível depositar com a conta fechada</p>";
        }
    }

    public function sacar($valor) {
        if($this->status == true && $this->saldo >= $valor){
            $this->saldo -= $valor;
        }else{
            if($this->status == false){
                echo "<p>Não é possível sacar com a conta fechada</p>";
            }
            elseif($this->saldo < $valor){
                echo "<p>Saldo insuficiente</p>";
            }
        }
    }

    public function pagarMensal() {
        if($this->tipo == "CC"){
            $this->saldo -= 12;
        }
        else{
            $this->saldo -= 20;
        }
    }

    function getNumConta() {
        echo "<p>Nº: $this->numConta</p>";
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        echo "<p>saldo: R$ $this->saldo</p>";
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }

}
