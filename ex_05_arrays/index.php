<?php
$linha = '<br>';
# UM ARRAY É UMA COLEÇÃO DE VALORES (UMA VARIÁVEL QUE PODE CONTER MUITOS VALORES)
# CADA ESPAÇO NO ARRAY É CHAMADO DE ÍNDICE
# OS INDICES PODEM SER NUMÉRICOS OU STRINS OU OS DOIS JUNTOS

$valores = array(1,2,3,10,20,30);
$nomes = array('João', 'Ana', 'Carlos');

# NOVA FORMA DE ESCREVER
$valores = [1,2,3,10,2,30];
$nomes = ['João', ' Ana', ' Carlos'];

# APRESENTAÇÃO DE VALORES (OS ÍNDICES DO ARRAY COMEÇA COM 0, ONDE 0 É A PRIMEIRA POSÇÃO)
echo $valores[0];   //[0] -> 1
echo $nomes[1];     //[1] -> Ana
echo $linha; echo $linha;


# DEININDO ÍNDICES -----------------------------------------------------------------------------------
$dados = [
    10 => 1000,    // O ÍNDICE 10 RECEBE (=>) O VALOR 1000
    20 => 2000,    // O ÍNDICE 20 RECEBE (=>) O VALOR 2000
    30 => 3000     // O ÍNDICE 30 RECEBE (=>) O VALOR 3000
];
echo $dados [20];

# SE FOR ADICIONADO UM NOVO ELEMENTO NO FINAL, ELE ASSUME O ULTIMO ÍNDICE + 1
$dados[] = 4000;   // $dados[31]
echo $linha;


# ALTERANDO O VALOR DO ARRAY PELO ÍNDICE ----------------------------------------------------------------
$valores = [10, 20, 30];

$valores[1] = 2000;     // $valores[10, 2000, 30]

# PODEMOS IGNORAR O ÍNDIXE PARA ADICIONAR UM NOVO ELEMENTO
$valores[] = 4000;     // $valores = [10, 2000, 30, 4000]
 
array_push($valores, 5000);    // $valores [10, 2000, 30, 4000, 5000]

echo 'Os valores são: ' . $valores[0] . ' e ' . $valores[1];

echo "$linha Os valores são: $valores[0] e $valores[1] $linha";


# ARRAYS ASSOCIATIVOS (OS ÍNDICES OU CHAVES SÃO DO TIPO STRING) -------------------------------------------
$dados = [
    'A' => 20,
    'B' => 30,
    'C' => 40,
    'D' => 50,
    'E' => 60
];

$dados = [
    'nome' => 'Itiel',
    'email' => 'itiel.dario@gmail.com',
    'nacionalidade' => 'Brasileiro',
    'telefone' => '(18) 98823-9759'
];

# NÃO É RECOMENDADO TER DUAS CHAVES COM O MESMO NOME
$dados = [
    'nome' => 'joão',
    'nome' => 'Carlos'   // O VALOR DEFINIDO É SEMPRE O ULTIMO
];

echo $linha . $dados['nome'];
echo $linha . $linha;

# ARRAYS MISTOS (ARRAY QUE COMBINA ÍNDICES NUMEROCOS E STRINGS) -----------------------------------
$dados = [
    0 => 10,
    'nome' => 'António',
    'sobrenome' => 'Silva',
    10 => 10000,
    11 => 'Rua de Lisboa',
    12 => 'Portugal'
];
echo $dados[0];              // 10
echo $dados['sobrenome'];    // Silva
echo $linha . $linha;


# ARRAYS MULTIDIMENCIONAIS (MATRIZES) -------------------------------------------------------------
# CONJUNTO DE ARRAYS

$dados = [
    [10, 20, 30, 40],          // COLUNA [0]
    [100, 200, 300, 400],      // COLUNA [1]
    [1000, 2000, 3000, 4000]   // COLUNA [2]
];

# PARA EXIBIR
echo $dados[1][2];       // COLUNA [1] ÍNDICE [2] = 300
echo $linha;
echo $dados[0][3];       // COLUNA [0] ÍNDICE [3] = 40
echo $linha . $linha;


# ARRAYS MULTIDIMENCIONAIS (MATRIZES) ASSOCIATIVOS ----------------------------------------------------
$cidades = [
    'portugal' => ['Lisboa', 'Porto', 'Coimbra'],
    'brasil' => ['Brasília', 'São Paulo', 'Rio de Janeiro'],
    'espanha' => ['Madrid', 'Barcelona', 'Sevilha']
];

echo $cidades ['espanha'][0];
echo $linha;
echo $cidades['brasil'][1]; 
echo $linha;
echo $cidades ['portugal'][2];

# OS ARRAYS PODEM TER MAIS DE DUAS DIMENÇÕES 