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
        <pre>
            <?php
                require_once 'Video.php';
                require_once 'Gafanhoto.php';
                require_once 'Visualizacao.php';
                
                $v[] = new Video("Aula 1 de POO");
                $v[] = new Video("Aula 12 de PHP");
                $v[] = new Video("Aula 15 de PHP");
                
                $g[] = new Gafanhoto("Jubileu", 22, "M", "juba");
                $g[] = new Gafanhoto("Creuza", 12, "F", "creuzita");
                
                $vis[] = new Visualizacao($g[0], $v[2]);
                
                print_r($vis);
                
            ?>
        </pre>
    </body>
</html>
