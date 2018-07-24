<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            
            $m = new Mamifero();
            
            $m->setPeso(33.5);
            $m->setIdade(20);
            $m->setMembros("patas");
            
            $m->locomover();
            $m->alimentar();
            $m->emitirSom();
            
            $m->setCorPele("Azul");
            
            print_r($m);
            ?>
        </pre>
    </body>
</html>
