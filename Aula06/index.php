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
        <h1>Projeto Controle Remoto</h1>
        <pre>
            <?php
            require_once 'ControleRemoto.php';

            $c1 = new ControleRemoto();
            $c1->ligar();
            $c1->abrirMenu();
            ?>
        </pre>
    </body>
</html>
