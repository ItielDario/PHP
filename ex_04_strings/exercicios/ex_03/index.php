<!-- 
    1 - Crie um ficheiro index.php
    2 - Defina duas variaveis: nome e o apelido
        - (Ambas deverão ter textos com letras minúsculas)
    4 - Numa página simples de HTML, apresente o seguinte texto dentro de um parágrafo:
        - O meu nome é NOME e meu apelido é APELIDO
 -->

<?php
    $nome = 'itiel';
    $sobrenome = 'dário';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome minúscuo</title>
</head>
<body>
    <p><?= 'O meu nome é ' . strtoupper($nome) . ' e o meu sobre nome é ' . strtoupper($sobrenome)?></p> 
    <!--STRTOUPPER -> OS CARACTERES ESPECIAIS (´, ç , ~, ^, ENTRE OUTROS) NÃO SÃO COLOCADOS EM MAIÚSCULO -->

    <p><?= 'O meu nome é ' . mb_strtoupper($nome) . ' e o meu sobre nome é ' . mb_strtoupper($sobrenome)?></p> 
    <!-- MB_STRTOUPPER -> OS CARACTERES ESPECIAIS (´, ç , ~, ^, ENTRE OUTROS) SÃO COLOCADOS TAMBÉM EM MAIÚSCULO -->
</body>
</html>