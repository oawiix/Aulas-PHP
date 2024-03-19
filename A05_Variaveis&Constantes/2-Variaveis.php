<?php
    // Variaveis
    $nome = "Fulano"; # string
    $idade = 30; # int
    $peso = 80.5; # float
    $fumante = true; # boolean

    // Utilizando variaveis
    echo "Utilizando as variaveis: <br>";
    echo "Nome: $nome <br>";
    echo 'Idade: $idade <br>';
    // Correção da linha anterior
    echo 'Minha idade ' . $idade . '<br>';
    echo '<br>';

    // Informações sobre as variaveis
    echo 'Informações sobre as variaveis: <br>';
    var_dump($nome);
    echo '<br>';
    var_dump($idade);
    echo '<br>';
    var_dump($peso);
    echo '<br>';
    var_dump($fumante);
    echo '<br>';


?>