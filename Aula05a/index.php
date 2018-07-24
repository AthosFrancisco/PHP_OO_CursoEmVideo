<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>        
        <?php
            require_once 'Conta.php';
            
            $conta1 = new Conta();
            $conta1->setDono("Athos Francisco");
            
            $conta1->abrirConta("CC");
            $conta1->depositar(10);
            $conta1->sacar(10);

            $conta1->getSaldo();
            $conta1->getNumConta();
            
            $conta1->fecharConta();
            $conta1->sacar(50);
            $conta1->fecharConta();
            
            $conta2 = new Conta();
            $conta2->getNumConta();
        ?>
    </body>
</html>
