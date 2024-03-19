<?php
// Formatação de variaveis
// Referencia: w3schools.com
// https://www.w3schools.com/php/func_string_number_format.asp

// Apresentar variaveis sem formatação
echo "Aprendendo a formatar variaveis <br>";
$val = 75.5; # Float

// Variavel sem formatação
echo "Valor da variavel: $val";
echo '<br>';

// Verificando tipo de variavel
echo "Verificando tipo de variavel: "; 
echo var_dump($val);
echo '<br>';

// Apresentar variaveis com formatação
echo "Aprendendo a formatar variaveis <br>";
$valFormat = number_format($val, 2,',','.');
echo "Valor da variavel formatada: $valFormat";
echo '<br>';

// Verificando tipo de variavel APÓS FORMATAÇÃO
echo 'Verificando tipo da variavel $val: ';
echo var_dump($val);
echo '<br>';

// Verificando o tipo da variavel $valFormat
echo 'Verificando tipo da variavel $valFormat: ';
echo var_dump($valFormat);
echo '<br>';

?>