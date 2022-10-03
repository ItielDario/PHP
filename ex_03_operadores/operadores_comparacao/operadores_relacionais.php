<?php
# VERIFICA SE OS VALORES SÃO IGUAIS, DIFERENTES, MAIORES OU MENORES, OU DO MESMO TIPO
# O RESULTADO DA COMPRAÇÃO SEMPRE RESULTARÁ VERDADEIRO OU FALSO

# VALORES IGUAIS? -----------------------------------------------------------------------
$a = (2 == 3);       // FALSE  
$a = (100 == 100);   // TRUE
$a = (50 == '50');   // TRUE
$a = (50 === '50');  // FALSE 

# OPERADORES DE COMPRAÇÃO COM 3 SIMBOLOS, COMPRAM VALOR E TIPO DE VARIAVEL
# ===
# !== 


# VALORES DIFERENTES? ------------------------------------------------------------------
$a = (2 != 3);       // TRUE 
$a = (2 <> 3);       // TRUE  
$a = (100 != 100);   // FALSE
$a = (50 != '50');   // FALSE
$a = (50 !== '50');  // TRUE


# VALORES SAO MAIORES OU MENORES? ------------------------------------------------------
$a = (2 > 3);       // FALSE 
$a = (2 < 3);       // TRUE 
$a = (50 >= 50);    // TRUE
$a = (50 <= 50);    // TRUE
$a = (50 < 50);     // FALSE


# SPACESHIP OPERATOR (TIE FIGHTER DO STAR WARS)
#  <==> (DEVOVE TRÊS POSIBILIDADES: 0, 1, -1)

$x = 1 <=> 1;   // 0 -> (SE 1 == 1 ENTÃO $x = 0)
$x = 3 <=> 2;   // 1 -> (SE 3 > 2 ENTÃO $x = 1)
$x = 1 <=> 2;   // -1 -> (SE 1 < 2 ENTÃO $x = -1)