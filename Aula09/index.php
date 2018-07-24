<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            
            $p[0] = new Pessoa("Athos", 23, "M");
            $p[1] = new Pessoa("Gabriel", 18, "M");
            
            $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
            $l[1] = new Livro("POO com PHP", "Maria Souza", 500, $p[1]);
            
            print_r($l);
            
            $l[0]->abrir();
            $l[0]->avancarPag();
            $l[0]->detalhes();
            ?>
        </pre>
    </body>
</html>
