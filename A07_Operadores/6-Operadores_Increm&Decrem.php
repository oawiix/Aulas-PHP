

<?php
    /*
    Operadores de incremento e decremento
    =====================================
    */

    $y = 1;
    echo $y;
    echo "<br>";

    // Modo tradicional
    $y = 1 + 1;
    echo $y;
    echo "<br>";

    // Modo pos-incremento
    $y++;
    echo $y;
    echo "<br>";

    // Modo pre-incremento
    ++$y;
    echo $y;
    echo "<br>";
    echo "<br>";



    // Teste, pos-incremento
    echo "Teste";
    $t = 1;
    echo "<br>";
    echo $t++; // Incrementa após mostrar na tela
    echo "  /  Valor original<br>";
    echo "---<br>";
    echo $t;
    echo "  /  Valor pos-incremento<br>";
    echo "---<br>";
    // Teste, pre-incremento
    echo ++$t; // Incrementa antes de mostrar na tela
    echo "  /  Valor pre-incremento<br>";


?>