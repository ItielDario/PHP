<?php /* ABERTURA DO PHP ################################################################## */

// APRESENTAÇÃO DE TEXTOS: ----------------------------------------------------------------
echo'Olá mundo com Echo!';

print'Olá mundo com Print';


# FORMAS DE ESCREVER: ---------------------------------------------------------------------
echo"PHP";

echo'PHP';

echo("PHP");


//USANDO TAG HTML NO PHP: -----------------------------------------------------------------
echo'<br>'; // PULA UMA LINHA (<BR> DO HTML)
echo'<br>'; 

echo 'Exemplo de comentário';

echo'<br>'; 

echo 'Ignorar essa instrução com um momentário';
?> <!-- FECHAMENTO DO PHP ################################################################# --> 


<!-- COMENTÁRIOS COM HTML (SÓ DA PARA USAR O PHP COM HTML SE O ARQUIVO FOR .php) -->
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formas de Escrever</title>
</head>
<body>
    <br>
    <br>

    <?php 
        echo 'teste 1' 
    ?>

    <br>

    <?php 
        echo "teste 2"
    ?>

    <br>

    <?= 'teste 3' ?> <!-- '=' -> ECHO  -->
</body>
</html>
<!-- COMENTÁRIOS NO HTML (COMO ESTE) SÃO APRESENTADOS NO CÓDIGO FONTE. JÁ COMENTÁRIOS DO PHP NÃO SÃO APRESENTADOS -->