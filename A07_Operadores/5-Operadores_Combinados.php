
<?php
    /*
    Operadores de atribuição combinados
    ================================
    Permite alterarmos o valor de uma variavel a partir de seu valor original.

    REFERENCIAS
    https://www.w3schools.com/php/php_operators.asp // W3Schools
    */

    // Demonstração sem combinação de operador de atribuição
    echo "Demonstração sem combinação de operador de atribuição";
    echo "<br>";
    $x = 10;
    $x = $x + 10;  // = 20
    $x = $x - 7;  // = 13
    $x = $x * 2;  // = 26
    $x = $x / 2;  // = 13
    echo $x;
    echo "<br>";

    // Demonstração com combinação de operador de atribuição
    echo "Demonstração com combinação de operador de atribuição";
    echo "<br>";
    $z = 10;
    $z += 10; // = 20
    $z -= 7; // = 13
    $z *= 2; // = 26
    $z /= 2; // = 13
    echo $z;
    echo "<br>";

?>