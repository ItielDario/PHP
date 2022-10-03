<?php
$limpa = '<br>';

# DECLARAÇÃO IF 
$nome = 'Itiel';
if($nome == 'Itiel'){
    echo 'Foi identificado o nome do aluno';
}
echo $limpa. $limpa;



# IF ... ELSE --------------------------------------------------------------------------------------------------------
$idade = 18;
if($idade < 18){
    echo 'Adolescente';
}
else{
    echo 'Adulto';
}
echo $limpa. $limpa;



# IF ... ELSEIF ... ELSE ----------------------------------------------------------------------------------------
$nota = '5'; //DE 0 A 10
if($nota <= 2){
    echo 'Nota fraca';
}
elseif($nota <= 4){
    echo 'Nota insuficiente';
}
elseif($nota <= 6){
    echo 'Nota positiva';
}
elseif($nota <= 8){
    echo 'Nota muito positiva';
}
else{
    echo 'Nota excelente';
}
echo $limpa. $limpa;



# USO DE OPERADORES LOGICOS ----------------------------------------------------------------------------------------
$numero = 20;
if($numero > 10 && $numero != 30){
    // EXECULTAR O CÓDIGO
}
else{
    //EXECULTA OUTRO CÓDIGO
}


# CONDIÇÕES DENTRO DE CONDIÇÕES ----------------------------------------------------------------------------------------
$numero = 14;
if($numero >= 0){
    if($numero >= 100){
        echo "O numero é maior ou igual a 100";
    }
    else{
        echo "O numero é positivo, mas inferior a 100";
    }
}
else{
    echo "O numero é negativo";
}
echo $limpa. $limpa;



# SWITCH / CASE -------------------------------------------------------------------------------------------------------
$nome = 'Itiel';
switch ($nome){
    case 'Itiel':
        echo '1';
        break;
    case 'Ana':
        echo '2';
        break;
    default:
        echo '3';
        break;
}
echo $limpa. $limpa;



# SINTAXE ALTERNATIVA ----------------------------------------------------------------------------------------------
$valor = 7;
if($valor == 10){
    //CODIGO 01
}
else{
    //CODIGO 02
}


# ALTERNATIVA (IF)
if($valor == 10):
    //CODIGO 01
    echo 'O valor é 10';
else:
    echo 'O valor não é 10';
    //CODIGO 02
endif;


# ALTERNATIVA (SWITCH)
$variable = 'value';
switch ($variable):
    case 'value':
        //CODIGO 01
        break;
        
    default:
        // CODIGO 02
        break;
endswitch;
echo $limpa . $limpa;



# MISTURANDO PHP COM HTML (IF) ------------------------------------------------------------------------------------- ?>
<?php if (true): ?>
    <div><h1>Execultar este código HTML</h1></div>
<?php else: ?>
    <h3>Execultar aqui</h3>
<?php endif; ?>
<?php
echo $limpa;



# OPERADOR TERNÁRIO (SUBSTITUI UMA ESTRUTURA SIMPLES DE IF / ELSE) --------------------------------------------------
$opcao = 0;

$nome = $opcao == 1 ? 'Itiel' : 'João'; // SE A CONDICÃO DO OPCAO FOR VERDADE O NOME = 'Itiel' SE FOR FALSA NOME = 'João'
echo $nome . $limpa;


# OU
$opcao == 0 ? $nome = 'Pedro' : $nome = 'Antônio';
echo $nome . $limpa;


# CONDIÇÃO TERNÁRIA NO ECHO
echo $opcao == 0 ? 'SIM' : 'NÃO' . $limpa . $limpa;
?>



<!-- COM INSTRÇÃO CONDICIONAL IF ------------------------------------------------------------------------------------>
<?php if($opcao == 1): ?>
    <h2>SIM</h2>
<?php else: ?>
    <h2>NÃO</h2>
<?php endif; ?>


<!-- COM OPERADOR TERNÁRIO -->
<h2><?= $opcao == 1 ? 'SIM' : 'NÃO' ?></h2>


<!-- CONTROLANDO O CSS -->
<h2 style="color: <?= $opcao == 1 ? 'blue' : 'red' ?>;">A cor deste Texto é definido pelo PHP</h2>
<?php
echo $limpa;



# EXEPREÇÕES COM MACTH (SEMELHANTE AO SWITCH, MAS COM UMA SITAXE MAIS CONCISA) ---------------------------------------
#  COM SWITCH
$x = 10;
switch ($x){
    case 5:
        echo 'Parou no 5';
        break;

    case 10:
        echo 'Parou no 10';
        break;

    case 15:
        echo 'Parou no 15';
        break;

    default:
        break;
}

echo $limpa;


# COM MATCH (APENAS UMA EXPRESSÃO POR CONDIÇÃO)
echo match ($x){
    5 => 'Parou no 5',
    10 => 'Parou no 10',
    15 => 'Parou no 15',
    default => 'É um número diferente de 5, 10 ou 15'
};
echo $limpa;


# COM SWITCH
$x = 5;
switch ($x){
    case 2:
    case 3:
        $opcao = 'É 2 ou 3';
        break;

    case 4:
    case 5:
    case 6:
        $opcao = 'É 4, 5 ou 6';
        break;

    default: 
        $opcao = 'É outro valor';
        break;
}
echo '<hr>' . $opcao . $limpa;


# COM MATCH
$x = 10;
$opcao = match($x){
    2, 3 => 'É 2 ou 3',
    4, 5, 6 => 'É 4, 5, ou 6',
    default => 'É outro valor'
};

echo $opcao;


# IMPORTANTE -------------------------------------------------------------------------------------------------------
# NO SWITCH A COMPARAÇÃO É FEITA POR VALOR (==)
# NO CASO DO MATCH, A COMPARAÇÃO É FEITA POR VALOR E TIPO (===)
echo '<hr>';

$x = '1';      // VARIAVEL DO TIPO STRING
switch ($x){   // COMPARA O VALOR DA VARIAVEL (1)
    case 1:
        echo 'Inteiro';
        break;
    case '1':
        echo 'String';
        break;
}
# INTEIRO
echo $limpa;


echo match($x){ // COMPARA O VALOR DA VARIAVEL E O TIPO DELA (1 / STRING)
    1 => 'Inteiro',
    '1' => 'String'
};

?>