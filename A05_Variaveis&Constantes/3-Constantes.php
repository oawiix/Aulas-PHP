<?php
// Constantes
// São utilizadas como variaveis que não devem mudar o valor de seu conteúdo
// Por padrão, são definidas com letras maiusculas

echo "Trabalhando com constantes";

// Exemplos
# Definindo uma constante de nome TAXA com 50%
define("TAXA", 0.5);
# Definindo outra constante de nome JUROS de 1%
define("JUROS", 0.01);

// Utilizando as constantes

echo '<br>';
echo "Valor da taxa: " . TAXA . "% <br>";
echo "com valor de juros igual a: " . JUROS . "% <br>";
echo "Valor da taxa: TAXA % <br>";
echo 'Valor da taxa: TAXA % <br>';

?>