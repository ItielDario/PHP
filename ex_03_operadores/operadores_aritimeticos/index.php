<?php

# OPERADOR DE ATRIBUIÇÃO '=' ---------------------------------------------------
$variavel = 100;
$variavel = 'João';


# OPERADORES ARITMÉTICOS ('+', '-', '*', '/', '%') -----------------------------
$x = 4 + 2;  #ADIÇÃO
$x = 4 - 2;  #SUBTRAÇÃO
$x = 4 * 2;  #MULTIPLICAÇÃO
$x = 4 / 2;  #DIVSÃO
$x = 4 % 2;  #RESTANTE DA DIVISÃO

$x = 4 ** 2; #CALCULA A POTÊNCIA
echo '4²: ', $x;  //16


# RESTANTE DA DIVISÃO ----------------------------------------------------------
echo '<br>';
echo '3462 / 7: ', 3462 / 7;
echo '<br>';
echo 'O resrante da divisão 3462 / 7 é: ', 3462 % 7;


# EXEMPLO DE SCRIPT -----------------------------------------------------------
$a = 10;
$b = 20;
$c = $d = $h = 100;    

$resultado = $a + $b;   // 30
$resultado = $a + 100;  // 110
$resuldado = $a * $b;   // 200 

$resultado = 1000 + $a + 10 + $b; // 1040


# OPERADORES DE ATRIBUIÇÃO COMBINADOS ------------------------------------------
$a = 10;

$a = $a + 20;  #30
$a = $a - 7;   #3
$a = $a * 2;   #30
$a = $a / 2;   #30

# SIMPLIFICANDO

$a += 20;  #30
$a -= 7;   #3
$a *= 2;   #20
$a /= 20;  #5

# OPREDORES DE INCREMENTO E DECREMENTO ------------------------------------------
$a = 1;

$a++;   # $a = $a + 1;
$a--;   # $a = $a - 1;

# PRÉ-INCREMENTO E PÓS-INCREMENTO
echo'<br>';
echo'<br>';
$a = 10;
$b = 10;

echo ++$a; //PRÉ-INCREMENTO (COMEÇA INCREMENTADO)
echo'<br>';
echo $b++; //PÓS-INCREMENTO (INCREMENTA DEPOIS)