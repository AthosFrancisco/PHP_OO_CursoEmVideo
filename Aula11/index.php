<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Bolsista.php';

            //$p1 = new Pessoa();
            $a1 = new Aluno();
            $a1->setNome("Gustavo");
            $a1->setIdade(22);
            $a1->setSexo("M");
            $a1->setMatricula(11111);
            $a1->setCurso("Informática");
            $a1->pagarMensalidade();
            print_r($a1);
            
            $a2 = new Bolsista();
            $a2->setNome("Rodrigo");
            $a2->setIdade(22);
            $a2->setSexo("M");
            $a2->setMatricula(11112);
            $a2->setCurso("Informática");
            $a2->pagarMensalidade();
            print_r($a2);
            ?>
        </pre>
    </body>
</html>
