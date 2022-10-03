<!-- 
    1 - Crie um script index.php
    2 - Defina duas variaveis: o seu nome e o seu apelido
    3 - Numa estrutura básica de HTML, apresente um título estático do tipo h3
        com o texto "O meu nome é: "
    4 - Apresente numa tag h1 o nome completo a partir das variáveis iniciadas no ponto 2
 -->

<?php
    $nome = 'Itiel';
    $sobrenome = 'Dario';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome completo</title>

</head>
<body>
    <h3>O meu nome é: </h3>
    <h1><?= "$nome $sobrenome";?></h1>
</body>
</html>