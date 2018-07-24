<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Cachorro.php';

            $a = new Cachorro();

            $a->setPeso(50);
            $a->setIdade(12);
            $a->setMembros(4);
            $a->setCorPelo("Azul");

            $a->emitirSom();
            
            $a->reagirFrase("Olá");
            $a->reagirFrase("Vai apanhar");
            $a->reagirHora(11, 45);
            $a->reagirHora(21, 00);
            $a->reagirDono(true);
            $a->reagirDono(false);
            $a->reagirIdadePeso(2, 12.5);
            $a->reagirIdadePeso(17, 4.5);

            print_r($a);
            ?>
        </pre>
    </body>
</html>
