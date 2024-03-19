

<?php
    /*
    Exericio 03
    Apresentar a area de diferentes formas geometricas
    A. Quadrado com lado 4cm    //  base*altura
    B. Triangulo com base=3 altura=2  // (base*altura) / 2
    C. Trapezio Base maior=4 Base menor =2 Altura=3  // A=(a+b)h/2
    */

    $quadrado = 4; 
    $aQuadrado = $quadrado ** 2;
    echo "A área do quadrado é: $aQuadrado<br>";
    echo "---------------<br>";

    $trianguloBase = 3;
    $trianguloAltura = 2;
    $aTriangulo = ($trianguloBase * $trianguloAltura) / 2;
    echo "A área do triangulo é: $aTriangulo<br>";
    echo "---------------<br>";

    $trapezioBaseMaior = 4;
    $trapezioBaseMenor = 2;
    $trapezioAltura = 3;
    $aTrapezio = ($trapezioBaseMaior + $trapezioBaseMenor) + $trapezioAltura / 2;
    echo "A área do trapezio é: $aTrapezio<br>";
    echo "---------------<br>";


?>