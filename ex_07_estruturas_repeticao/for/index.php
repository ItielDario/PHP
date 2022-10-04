<?php
$limpa = '<br>';

# FOR (EXECULTA UM BLOCO DE CÓDIGOS DETERMIDADO NÚMERO DE VEZES)
for ($x = 1; $x < 10; $x++){
    echo $x . ' - ';
}
echo '<hr>';


# FORMA DIFERENTE
$i = 1;

for(; $i < 10;){
    echo $i++ . ' - ';
}
echo '<hr>';


# UTILIZAÇÃO DE VÁRIOS PARâMENTROS
for($contador = 1, $x = 10; $contador < 10; $contador++, $x--){
    echo $x . $limpa;
}
echo '<hr>';


# APRESENTADO ARRAYS
$nomes = ['Itiel', 'João', 'Maria', 'Carlos'];

for ($i = 0; $i < count($nomes); $i++){ //COUNT() CONTA QUANTOS VALORES TEM DENTRO DE UM ARRAY
    echo $nomes[$i] . $limpa;
}

?>