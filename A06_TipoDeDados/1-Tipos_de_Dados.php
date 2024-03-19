
<?php
    // Tipos de Dados
    # As variaveis podem ser de diferentes tipos de dados
    #A mesma variavel pode ter tipos diferentes de valores

        //REFERENCIAS
        //https://www.w3schools.com/php/php_datatypes.asp //W3Schools

    // Atribuições de tipos diferentes para a mesma variavel
    $variavel = 100;
    $variavel = "cem";

    # Apesar das variaveis serem do tipo implicito
    # é importante conhecer os tipos de variaveis
    $inteiro = 100;
    $float = 100.5;
    $string = "cem";
    $boolean = true;
    $char = 'c';
    $array = [1,2,3,4,5];
    $nulo = null;
    // $objeto = new Class;   // Objeto com propriedades e métodos
    
    echo $inteiro;
    echo "<br>";
    echo $inteiro;
    echo "<br>";
    echo $float;
    echo "<br>";
    echo $string;
    echo "<br>";
    echo $boolean;
    echo "<br>";
    echo $char;
    echo "<br>";
    echo $array[1];
    echo "<br>";
    var_dump($nulo);
    echo "<br>";
    
    ?>