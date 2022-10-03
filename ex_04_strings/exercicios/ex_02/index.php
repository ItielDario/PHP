<!-- 
    1 - Crie um script index.php
    2 - Defina as variaveis nome e o apelido com os respectivos valores
    3 - Apresente o nome completo num paragrafo de HTML
    4 - No segundo parágrafo apresente o seguinte:
        - O meu nome tem x caracteres.
        - Sendo x o calculo do total de caracteres do seu nome
 -->

<?php 
    $nome = 'Itiel';
    $sobrenome = 'Dário';
    $nome_completo = "$nome $sobrenome";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caracteres no nome</title>
</head>
<body>
    <p><?= $nome_completo ?></p>

    <?php $quantidade_caracteres = strlen($nome_completo) ?> <!-- STRLEN -> CONTA QUANTOS CARACTERS TEM E TAMBÉM CONTA CARACTERES ESPECIAIS (´, ç , ~, ^, ENTRE OUTROS) -->
    <p><?= 'Meu nome tem ' . $quantidade_caracteres . ' caracteres.' ?></p>
    

    <?php $quantidade_caracteres = mb_strlen($nome_completo) ?> <!-- MB_STRLEN -> CONTA QUANTOS CARACTERS TEM SEM CONTAR CARACTERES ESPECIAIS (´, ç , ~, ^, ENTRE OUTROS) -->
    <p><?= 'Meu nome tem ' . $quantidade_caracteres . ' caracteres.' ?></p>
</body>
</html>




