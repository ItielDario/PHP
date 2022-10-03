<?php

# DEFINE-SE COM UM DOLAR ($) E UM IDENTIFICADOR (NOME DA VARIAVEL) -----------------------
$variavel; //NAO SÃO TIPIFICADAS (PODEM CONTER NUMEROS, TEXTOS, CODIGOS, ETC.)


# PODEMOS DEFINIR E INICIAR UMA VARIÁVEL -------------------------------------------------
$variavel = 100; //NUMEROS


# PODEMOS ALTERAR O TIPO DE VALORES DE UMA VARIÁVEL --------------------------------------
$variavel = 'texte'; //STRING


# CASE SENSITIVE -------------------------------------------------------------------------
$variavel = 'uma variavel';
$Variavel = 'outra variavel';


# COM DEFINIR VARIAVEIS -------------------------------------------------------------------
$var = 0;
$var_um = 0;
$varUm = 0;
$_um = 0;
$_1 = 0;


# COMO NÃO DEFINIR VARIAVEIS
/*
$1var = 0;
$!var = 0;
$variavel(1) = 0;
$variavel um = 0;
$variavel-um = 0;
*/


# CONVENÇÕES ------------------------------------------------------------------------------
$umaVariavel = 0; //CAMEL CASE
$uma_variavel = 0; //COM UNDERSORES (SNAKE CASE)
$UmaVariavel = 0; //STUDLY CASE (NÃO RECOMENDADO)


# TIPOS DE DADOS --------------------------------------------------------------------------
$inteiro = 100;                       # NUMEROS INTEIROS
$float = 10.5;                        # NUMEROS COM CASAS DECIMAIS
$boll = true;                         # VERDADEIRO OU FALSO
$string = "Olá mundo!";               # CONJUNTO DE CARACTERES
$array = [1,2,3];                     # CONJUNTO DE VALORES
//$pessoa = new Pessoa();             # OBJETO COM PROPRIEDADES E METODOS
$nulo = null;                         # VALOR NULO


# MOSTRANDO O VALOR DA VARIAVEL -----------------------------------------------------------
$variavel = 'Ola Mundo!';
echo $variavel;