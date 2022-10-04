<?php
$limpa = '<br>';

# WHILE (A CONDIÇÃO É AVALIADA NO INICIO)
$x = 1;
while ($x < 10){
    echo 'Ciclo em execulção' . $limpa;
    $x++;
}
echo '<hr>';


# OUTRO EXEMPLO
$i = 0;
while ($i < 10){
    echo $i++ . $limpa;
}
echo '<hr>';


# EXEMPLO (PAR OU IMPAR)
$x = 0;
while($x < 10){
    if($x % 2 == 0){
        echo $x . ' é par' . $limpa;
    }
    else {
        echo $x. ' é impar' . $limpa;
    }
    $x++;
}

?>