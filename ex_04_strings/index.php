<?php

# SERIE DE CARACTERES QUE PODEM SER QUARDADOS DENTRO DE UMA VARIÁVEL.
# CONJUNTO DE LETRAS, ESPAÇOS, SEMBOLOS E ALGARITIMOS.
$a = 'Esta é uma string';
$b = "Esta é outra string";

echo $a;
echo '<br>';
echo $b;
echo '<br>'; echo '<br>';


# CONCATENAÇÃO DE STRINGS (JUNÇÃO DE VARIAS STRINGS) ----------------------------------------------
# EXISTEM DOIS OPERADORES DE CONCATENAÇÃO:

# .
$a = 'Itiel' . ' ' . 'Dario';   // O '.' LIGA AS DIFERENTES STRINGS

# .=
$b = 'Itiel';
$b .= ' ' . 'Dario';            // o '.=' FAZ UMA JUNÇÃO (CONCATENAÇÃO) COM O VALORE QUE JÁ EXISTE NA STRING

echo $a;
echo "<br>";
echo $b; 
echo "<br>"; echo "<br>";


# EXEMPLO 1
$nome = 'Alessandra';
$sobrenome = 'Cardoso';
$nome_completo = $nome . ' ' . $sobrenome;

echo $nome_completo;
echo "<br>"; echo "<br>";


# DIFERENÇA ENTRE STRINGS COM " E ' --------------------------------------------------------------------
# UTILIZANDO "
$nome = 'Joaquim';
$sobrenome = 'Pereira';
$nome_completo = "$nome $sobrenome"; // TEM UM EFEITO PARCE (INTERPRETA E MOSTRA O VALOR DA STRING)

echo $nome_completo;
echo "<br>";

# UTILIZANDO '
$nome = 'Joaquim';
$sobrenome = 'Pereira';
$nome_completo = '$nome $sobrenome'; 

echo $nome_completo;
echo "<br>"; echo "<br>";


# FUNÇÕES PARA TRATAMENTOS DE STRINGS -------------------------------------------------------------------
# PARA APRENSENTAR UM DETERMINADO CARACTER DE UMA STRING
$frase = 'Esta frase tem 29 caracteres.';
$n = '<br>';

echo $frase[0]; //APRESENTA O PRIMEIRO CARACTER DA FRASE
echo $n;

echo $frase[5]; //APRESENTA O SEXTO CARACTER DA FRASE
echo $n;


# COMPARAÇÃO DE STRINGS
$a = 'Itiel';
$b = 'Dario';

$c = ($a == $b);   //FALSE
$d = ($a != $b);   //TRUE


# FUNÇÕES NATIVAS PARA OPERAR COM STRINGS (https://www.php.net/manual/pt_BR/ref.strings.php)
$frase = 'Esta frase tem 29 caracteres.';

//RETORNA O NÚMERO DE CARACTERES DA STRING (STRING LENGTH)
$numero_caracteres_total = strlen($frase);    // 29

//RETORNA UMA PARTE DE UMA STRING (DO CARACTER 0  AO 4)
$primeira_palavra = substr($frase, 0, 4);     // 'Esta' 

//CONVERTE TODA A STRING EM LETRAS MAÍUSCULAS (STRING TO UPPER)
$todas_maiusculas = strtoupper($frase);       // 'esta frase tem 29 caracteres.'

//CONVERTE TODA A STRING EM LETRAS MINÚSCULA (STRING TO LOWER)
$todas_maiusculas = strtolower($frase);       // 'ESTA FRASE TEM 29 CARACTERES.'

//SUBSTITUI UMA LETRA POR OUTRA (STRING REPLACE)
$nova_frase = str_replace('a', 'x', $frase);  // 'Estx frxse tem 29 cxrxcteres.'

//VERIFICA QUAL É A POSIÇÃO DE UM DETERMINADO CARACTER DENTRO DE UMA STRING (STRING POSITION)
$posicao = strpos($frase, 'a');                // 3

//VERIFICA SE CONTÉM UMA DETERMINADA PALAVRA A STRING (STRING CONTAINS)
$nome = 'Ana Maria Silva Cardoso';
$x = str_contains($nome, 'Silva');             // TRUE

//VERIFICA SE A STRING COMEÇA COM UMA DETERMINADA PALAVRA (STRING STARTS WITH)
$x = str_starts_with ($nome, 'Ana');           // TRUE
$x = str_starts_with ($nome, 'ana');           // FALSE

//VERIFICA SE A STRING TERMINA COM UMA DETERMINADA PALAVRA (STRING ENDS WITH)
$x = str_ends_with ($nome, 'oso');             // TRUE
$x = str_ends_with ($nome, ' oso');            // FALSE


# CARACTERES DE ESCAPE ----------------------------------------------------------------------------------
echo '<p>Este é um paragráfo de HTML</p>';
echo'<br>';

# $frase1 = 'I'm going to John's Party!';   //UTILIZAÇÃO DE FRASE COM ' PODE CAUSAR ERRO (I'm - John's)
$frase2 = "I'm going to John's Party!";     

# $frase3 = "I'm not sure John "The great" will win this fight" //UTILIZAÇÃO DE FRASE COM " PODE CAUSAR ERRO ("The great")


# A '\' ANTES DAS ÁSPAS É UM SIMBOLO PARA DEFINIR UM CARACTER DE ESCAPE
$frase1 = 'I\'m going to John\'s Party!';       

$frase3 = "I'm not sure John \"The great\" will win this fight";


# USANDO O TERMINAL -------------------------------------------------------------------------------------
echo 'Itiel Dario\n\rTeste';
echo "<br>";
echo "Itiel Dario\n\rTeste";
echo "<br>"; echo "<br>";


# CARACTER DE ESCAPE UNICODE ----------------------------------------------------------------------------
# APRESENTA CARACTERES A PARTIR DO SEU CÓDIGO HEXADECIMAL (https://www.utf8-chartable.de/)

echo "\u{A9}";   // COPYRIGHT
echo "\u{BC}";   // 1/4
echo "\u{AE}";   // REGISTRED TRADEMARK
echo "<br>"; echo "<br>";

# HTML ENTITIES (https:)
echo '&copy';    // COPYRIGHT
echo '&frac14';  // 1/4
echo '&reg';    // REGISTRED TRADEMARK
echo "<br>"; echo "<br>";


# HEREDOC (PERMITE FAZER O PARSE DE VARIÁVEIS) -----------------------------------------------------------
# PODEM SER UTILIZADOS NO TRATAMENTO DE BLOCO DE TEXTOS MAIORES
$cliente = 'Itiel Dario';
$email = 'itiel.dario@gmail.com';

$texto = <<<LABEL
Olá, sr. $cliente.
Enviamos o regulamento para o seu email $email
Obrigado pela sua  simpatia.
LABEL; // TODAS AS VARIÁVEIS NO MEIO DO TEXTO VÃO SOFRER PARSE

echo $texto;
echo "<br>";


# NOWDOC (NÃO PERMITE O PARSE DE VARIÁVEIS) -----------------------------------------------------------
$cliente = 'Itiel Dario';
$email = 'itiel.dario@gmail.com';

$texto = <<<'LABEL'
Olá, sr. $cliente.
Enviamos o regulamento para o seu email $email
Obrigado pela sua  simpatia.
LABEL; // COLOCAR '' NO LABEL FAZ COM QUE AS VARIAVÍES NÃO SOFRAM PARSE

echo $texto;

die(); // QUANDO CHEGAR NA FUNÇÃO DIE() O PROGRMA NÃO EXECULTA MAIS NADA