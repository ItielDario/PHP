<?php
$limpa = '<br>';

# FOREACH (PASSA PELOS VALORES DE UM ARRAY)
$numeros = ['1', '2', '3', '4', '5'];

foreach($numeros as $x){ // CONFORME FOR PASSANDO PELOS VALORES DA VARIAVEL $NUMEROS VAI GUARDANDO OS VALORES DENTRO DE $X
    echo $x . $limpa;
}
echo '<hr>';


# UTILIZANDO O ÍNDICE E O VALOR DO ÍNDICE
$capitais = [
    'portugual' => 'Lisboa',  //INDICE => VALOR
    'brasil' => 'Brasília',
    'espanha' => 'Madrid'
];

foreach($capitais as $key => $value){ //PEGA DA VARIAVEL A CHAVE E O VALOR DA CHAVE ('portugual' => 'Lisboa') E SALVA DENTRO DAS VARIAVEIS ($key => $value)
    echo "Para o país $key a capital é $value" . $limpa;
}

?>