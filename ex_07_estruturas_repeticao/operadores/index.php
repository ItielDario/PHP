<?php
$limpa = '<br>';

# BREAK (INTERROMPE A EXECULÇÃO DE UM LOOP)
for ($i = 0; $i < 20; $i++){
    echo $i . $limpa;

    if($i == 10){
        break;    //INTERROMPE / PARAR  O LOOP
    }
}
echo '<hr>';

$nomes = ['João', 'Ana', 'Maria'];

foreach($nomes as $nome){
    echo $nome . $limpa;

    if($nome == 'Ana'){
        break;    //INTERROMPE / PARAR  O LOOP
    }
}
echo '<hr>';



# CONTINUE (AVANÇA UMA VOLTA NO CICLO IGNORANDO O CODIGO QUE DEVERIA SER EXECULTADO) ----------------------------------
for($i = 0; $i < 20; $i++){
    if ($i == 10){
        continue;      // IGNORA TODO O CODIGO ABAIXO E VOLTA A LINHA INICIAL DO LOOP
    }

    echo $i. ' - ';
}
echo ' NÃO TEM O NÚMERO "10"';
echo '<hr>';


$nomes = ['Jõao', 'Ana', 'Maria', 'Carlos'];
foreach ($nomes as $nome){
    if($nome == 'Ana'){
        continue;      // IGNORA TODO O CODIGO ABAIXO E VOLTA A LINHA INICIAL DO LOOP
    }

    echo $nome . $limpa;
}
echo '<hr>';



# GOTO (PERMITE SAIR DO LOOP E IR PARA UMA LINHA DO CÓDIGO) ----------------------------------------------------------
for($i = 0; $i < 20; $i++){
    if($i == 7){
        goto teste;     // VAI IR PARA O LABEL E VAI IGNORAR OS CÓDIGOS ANTERIORES
    }

    echo $i. $limpa;
}
echo 'Fim do loop';

teste:       // LABEL
echo 'AQUI!';

?>