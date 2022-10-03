<?php

/* OPERADORES LÓGICOS (INSTRUÇÕES CONDICIONAIS) PERMITEM 'LIGAR' 
VÁRIAS COMPARAÇÕES E AVALIA SE SÃO VARDADEIRA OU FALSAS */

$a = 100;
$b = 200;

$x = ($a < $b) && ($a < 1000);  // TRUE (&& -> AND) 
$x = ($a > $b) || ($a > 1000);  // FALSE (|| -> OR)
$x = ($a < 150) && ($b > 300);  // FALSE
$x = ($a > 10) || ($b > 500);   // TRUE
$x = ($a == 100) && ($b < $a);  // FALSE


$x = (10 > 5) && (20 > 30);     
$x = (true && false);     // FALSE 

$x = (2 > 1) && (2 > 2);     
$x = (true && true);     // TRUE 

$x = (2 < 4) || (4 > 10);     
$x = (true && false);     // TRUE 

$x = (2 == 3) || (3 > 1);     
$x = (false && true);     // TRUE 


# OPERADOR 'NOT' ---------------------------------------------------------------------------
$a = false;

$x = !$a;   // TRUE (NOT OF FALSE = TRUE)