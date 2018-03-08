<!DOCTYPE html>
<!--
Autor Marcelo Matos
Data 08-03-2018
Finalidade Projeto de aprendizado PHP
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula3</title>
    </head>
    <body>
        <?php
        #Quando queremos uma variavel devemos utilizar o simbolo $
        $variavel="variavel Exemplo";
        
        #Porém quando queremos definir uma váriavel de váriavel utilizando o simbolo
        $$variavel = 8;
        echo "O valor da $variavel é".$$variavel;
        echo"<br>O valor da $variavel é {$$variavel}";
        echo"<br>";
        var_dump(boolval(0));
        echo"<br>";
        var_dump(boolval)(1)
    
    </body>
</html>
