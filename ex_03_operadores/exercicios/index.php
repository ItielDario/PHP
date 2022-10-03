<?php
# EXERCÍCIO 1
echo "EXERCÍCIO 1:"; echo "<br>";
echo "a é igual a 1000 e b é igual a metade de a"; echo "<br>";
echo "Apresente o valor de b"; echo "<br>"; echo "<br>";

$a = 1000;
$b = $a / 2;

echo "Valor de b: ", $b;
echo "<br>"; echo "<br>";

# EXERCÍCIO 2
echo "------------------------------------------------------------------------------"; echo "<br>";
echo "EXERCÍCIO 2:"; echo "<br>";
echo "a é igual a 100 e b é igual a 3 vezes o  valor de a"; echo "<br>";
echo "Apresente o valor de b"; echo "<br>"; echo "<br>";

$a = 100;
$b = $a * 3;
echo "O valor de b: ", $b;
echo "<br>"; echo "<br>";

# EXERCÍCIO 3
echo "------------------------------------------------------------------------------"; echo "<br>";
echo "EXERCÍCIO 3:"; echo "<br>";
echo "a é iniciado e apresentado com o valor 20"; echo "<br>";
echo "Na instrução segunte, a deverá ser apresentado com o valor 21"; echo "<br>"; echo "<br>";

$a = 20;
echo "Valor de a: ", $a++;
echo "<br>";
echo "Valor de a: ", $a;

echo "<br>"; echo "ou"; echo "<br>"; 

echo "Valor de a: ", $a = 20;
echo "<br>";
echo "Valor de a: ", ++$a;
echo "<br>"; echo "<br>";

# EXERCÍCIO 4
echo "------------------------------------------------------------------------------"; echo "<br>";
echo "EXERCÍCIO 4:"; echo "<br>";
echo "a é igual a 100"; echo "<br>";
echo "b é igual a 250"; echo "<br>";
echo "c é igual a 'a' mais 'b'"; echo "<br>";
echo "Acrescentar mais uma unidade a c"; echo "<br>";
echo "Apresentar c"; echo "<br>"; echo "<br>";

$a = 100;
$b = 250;

echo "Valor de c: ", $c = $a + $b + 1;

