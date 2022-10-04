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
echo '<hr>';



# ESCOPO E CICLO DE VIDA DE UMA VARIAVEL -------------------------------------------------------------
# UMA VARIAVEL PHP PASSA A EXISTIR A PARTIR DO LOCAL QUE FOI INCIADA
# AS VARIAVEIS DENTRO DE UMA FUNCAO TÊM UM CICLO DE VIDA LIMITADO
 $variavel = 10;

 echo "<h1>$variavel</h1>";
 funcao(20, 30);

 function funcao($a, $b)
 {
    echo "<h1>$variavel</h1>";      // ESTA VARIAVEL NÃO É CONHECIDA DENTRO DA FUNÇÃO
    echo "<p>$a e $b</p>";
 }
echo "<p>$a e $b</p>";        // ESTAS VARIAVEIS EXISTEM APENAS DENTRO DA FUNÇÃO, E NÃO EXISTEM FORA


function funcao_2()
{
    $v = 100;
}

funcao_2();
echo "<p>$v</p>";


# AS VARIAVEIS DEFINIDAS DENTRO DE LOOP OU ESTRUTURAS CONDICIONAIS NÃO SÃO DESTRUÍDAS

if (true){
    $a = 10;
}
echo "<p>$a</p>";


for ($i = 0; $i < 12; $i++){
    $x = 1000;
}
echo "$i e $x";

echo '<hr>';



# GLOBAL (A VARIAVEL $a EXISTE EM DOIS ESCOPOS DIFERENTES) ---------------------------------------------------------------
$a = 10;

function funcao_3()
{
    global $a;    // TRAZ PARA DENTRO DA FUNÇÃO UM VARIAVEL DE FORA
    $a = 20;
}

funcao_3 ();
echo "<h3>$a</h3>";


# OUTRA FORMA
$b = 100;

function funcao_4()
{
    $GLOBALS['b'] = 200;     //$GLOBALS[indice] -> ARMAZENA TODAS AS VARIEVEIS GLOBAIS DENTRO DE UM ARRAY ONDE O INDICE É O NOME DA VARIAVEL

}

funcao_4 ();
echo "<h3>$b</h3>";









