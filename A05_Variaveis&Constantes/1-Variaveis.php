<?php
// Variaveis
/* Utilizadas para armazenar dados:
 Numeros, textos, etc. podemos apresentar e modificar os valores contidos sem seu interior
 ao longo do codigo */

   // REFERENCIAS
   //https://www.w3schools.com/php/php_variables.asp W3Schools

 # São definidas com um simbolo de dolar ($) e nome da variavel como identificador
 $variavel01;
 # Foi criado um espaco de memoria sem conteúdo.
 # Variavel não inicializada

 $variavel02 = 100;
 # Foi criado um espaçõ de memoria inicializada com valor numero = 100

 $variavel02 = "Texto";
 # A mesma variavel anterior com conteúdo alterado

 echo $variavel02;
# É apresentado o conteúdo da ultima atribuição da variavel com o tipo alterado
# As variaveis são "case sensitive"
# Portanto, a variação de caixa aleta e baixa denotam variaveis diferentes

$variavel02 = 150; // variavel com reatribuição
$variavel02 = 100; // outra variavel

// Forma erradas de nomear variaveis
/* 
 $1var = 0;
 $!var = 0;
 $variavel(1) = 0;
 $variavel um = 0;
 $variavel-um = 0;
*/

// Formas corretas de nomear variaveis
$var1 = 0;
$var_um = 0;
$varUm = 0;
$_umUm = 0;
$_1 = 0;

# Não há uma definição da forma mais corretas de nomear uma variavel
# Porém, é recomendado utlilizar um mesmo padrão para o mesmo projeto
# ou verificar se o cliente já possui um padrão definido
# Existem alguns padrões utilizados.
$umaVariavel = 0; // Camel Case, padrão muito utilizado
$uma_variavel = 0; // Snake Case, padrão com underscore
$UmaVariavel = 0; // Studly Case. Não recomendado, pois é o mesmo padrão utilizado para classes


?>
