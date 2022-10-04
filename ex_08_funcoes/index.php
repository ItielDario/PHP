<?php
$limpa = '<br>';

# SÃO BOLCO DE CÓDIGOS IDENTIFICADOS POR NOME E ASSINATURA
# PERMITE QUE O CÓDIGO SEJA REUTILIZADO E ORGANIZADO DE UMA FORMA MUITO MAIS CONSISTENTE

# ESTES BOLOCOS SÃO UTILIZADOS QUANDO SÃO SOLICITADOS
function funcao()
{
    // CODIGO DA FUNÇÃO
}


# EXEMPLO DE APLICAÇÕES
echo 'Ínicio da nossa aplicação' . $limpa;

execultar();      // CHAMANDO A FUNÇÃO

function execultar()
{
    echo 'A função foi execultada';
}


# DEFININDO NOMES PARA FUNCAO
function camelCase()
{

}

function snake_case()
{

}
echo '<hr>';



# PARÂMETROS (NOME DA VARIAVEIES EXISTENTES DENTRO DA FUNÇÃO) ---------------------------------------------------------
# ARUMENTOS (DADOS PASSADOS QUANDO A FUNÇÃO É CHAMADA)

function adicao($a, $b){
    // CODIGO DA FUNCAO
}


# TEMOS DUAS VARIAVEIS QUE VÃO EXISTIR DENTRO DA FUNÇÃO
# OS PARAMETROS PERMITEM PASSAR VALORES PARA O INTERIOR DE UM FUNÇAO QUANDO ELA É CHAMADA

adicionar(10, 20);         // ARGUMENTOS (10, 20)
echo $limpa;
adicionar(100, 200);       // ARGUMENTOS (100, 200)

function adicionar($a, $b) // O PARÂMETRO $a GUARDA O 1º VALOR (10) E O PARÂMETRO $b 2º VALOR (200)
{
    echo "$a + $b = " . ($a + $b);
}
echo $limpa . $limpa;



$nomes = ['João', 'Ana', 'Maria', 'Carlos'];
foreach($nomes as $nome){
    saudacao($nome);
}

function saudacao($valor)
{
    echo "Bem vindo(a) $valor.<br>";
}
echo '<hr>';



# PARÂMETROS OPCIONAIS (PARÂMENTROS COM VALORES PRÉ DEFINIDOS) ----------------------------------------------------------
# NÃO OBRIGA DEFINIR ARGUMENTOS

function multiplicar($a, $b = 2)
{
    // CODIGO AQUI

    # $a SERÁ O VALOR PASSADO POR ARGUMENTO
    # $b:
    #    O VALOR DO ARGUMENTO SE ELE FOR PASSADO NA CHAMADA
    #    O VALOR 2 SE NÃO FOR PASSADO NA CHAMADA

    echo $a * $b;
}

multiplicar(10);        // PASSADO SOMENTE O VALOR DE $a ($a = 10, $b = 2)
echo $limpa;
multiplicar(10, 20);    // PASSADO O VALOR DE $a E $b ($a = 10, $b = 20)
echo $limpa . $limpa;


# OS PARÂMETRO OPCIONAIS TEM QUE SER DEFINIDOS APÓS OS PARÂMETROS NÃO OPCIONAIS

function dividir($b, $a = 2)
{
    echo "$a e $b";
}

dividir(2, 10);
echo '<hr>';



# NAMED ARGUMENTS -----------------------------------------------------------------------------------------------------
function subtrair($a, $b = 10, $c = 30)
{
    echo "$a - $b - $c = <strong>" . ($a - $b - $c) . "</strong>";
}

subtrair(100);
echo $limpa;


# ALTERAR O VALOR DE C E MANTER O VALOR DE B
subtrair(100, 10, 300);    // FORMA ANTIGA
echo $limpa;


subtrair(c:1000, a:0);     // FORMA NOVA (O PARAMETRO $a AINDA É OBRIGATÓRIO, MAS NÃO PRECISA ESTAR NA ORDEM)

echo $limpa;

subtrair (500, c:1000);



# NOTAS SOBRE PARÃMETROS ------------------------------------------------------------------------------------------------

# UM FUNÇÃO NUNCA PODE SER CHAMADA SEM QUE OS VALOR OBRIGATÓRIOS SEJEAM FORNECIDOS

function aleatoria($a, $b)
{
    // CODIGO
}

// aleatoria(10);   (SÓ FOI FORNECIDO O VALOR DE $a)
echo '<hr>';


# PODEMOS PASSAR MAIS ARGUMENTOS DO QUE FOI SOLICITADO

function aleatoria_2($a)
{
    $x = func_get_arg(0);       // $x = O PRIMEIRO ARGUMENTO PASSADO
    $y = func_get_arg(1);       // $y = O SEGUNDO ARGUMENTO PASSADO
    $z = func_get_arg(2);       // $z = O TERCEIRO ARGUMENTO PASSADO
    echo "$x + $y + $z = " . ($x + $y + $z);

    echo '<br>';


    $i = 0; // O $i VAI ANDAR PELOS VETORES E TER O PAPEL DE ÍNDICE
    $argumentos = [];
    while(count($argumentos) < func_num_args()){ // ENQUANTO O NUMERO DE ARGUMENTOS DO VETOR $argumentos FOR MENOR QUE O NUMERO DE ARGUMENTO QUE FOI PASSADO VAI EXECULTAR

        $argumentos [$i] = func_get_arg($i); // PEGA OS ARGUMENTOS PASSADOS E COLOCA NO VETOR $argumetos
        $i++;
    }

    $soma = 0;
    for($j = 0; $j < count($argumentos); $j++){ 
        $soma = $soma + $argumentos [$j]; // SOMA DOS ARGUMENTOS PASSADOS

        echo $argumentos [$j];
        
        if($j < count($argumentos) - 1){ //ESTÉTICA DO ECHO
            echo ' + ';
        }   
    }
    echo ' = '. $soma;

    echo '<br>Quantidade de argumentos: ' . func_num_args();       // AVALIA QUANTOS ARGUMENTOS FORAM PASSADOS PARA FUNCAO
}

aleatoria_2(10, 20, 30, 2000, 3);
echo '<hr>';



# VARIADIC PARAMETER (ARGUMENTO ESPECIAL) ----------------------------------------------------------------------------
function minha_funcao(...$argumentos)   //...$argumentos -> ARRAY (GUARDA TODOS OS ARGUMENTOS EM UMA VARIAVEL)
{
    foreach ($argumentos as $v){
        echo "$v - ";
    }
}
minha_funcao(10, 20, 30, 40, 50, 60, 70, 80);
echo '<hr>';



# RETURN -------------------------------------------------------------------------------------------------------------
# FINALIZA A EXECULÇÃO DO CÓDIGO DE UM FUNÇÃO RETORNANDO AO LOCAL ONDE A FUNÇÃO FOI CHAMADA

function falar()
{
    return;
    echo 'Não vai ser apresentado este texto';
}


# USANDO O RETURN PARA DEVOLVER UM VALOR
# PODE SER DESENVOLVER UM CONJUNTO DE CÁLCULOS E RETORNAR O RESULTADO

function somar($a, $b)
{
    $resultado = $a + $b;
    return $resultado;

    # OU
    return $a + $b;
}
echo "10 + 20 = " . somar(10, 20) . $limpa;  //VAI APRESENTAR O VALOR 30


$nome = 'João';
if (avaliar_nome($nome)){
    echo 'O cliente está correto';
}

function avaliar_nome($n)
{
    if ($n == 'João'){
        return true;
    }
    else{
        return false;
    }
}
echo $limpa;


# FUÇÃO SEM RETORNO DEVOLVE SEMPRE UM VALOR NULL
function teste()
{
    // CÓDIGO
}

if(falar() == null){
    echo 'Função com retorno igual a nulo';
}
echo '<hr>';



# FUNCÕES ANÔNIMAS -------------------------------------------------------------------------------------------------------
# NÃO TEM NOME E PODE SER DEFINIDA COMO UM VALOR A ATRIBUIR A UMA VARIÁVEL
$a = function()
{
    echo "<p>Olá</p>";
};  // TEM QUE TER UM ';'


$a();   //PARA EXECULTAR A FUNCÃO


# OUTRO EXEMPLO
$falar = function($mensagem)  // $mensagem -> PARÂMETRO QUE VAI RECEBER O VALOR DO ARGUMENTO ('Estou aqui!')
{
    echo "<p>Eu digo: $mensagem</p>";
};

$falar ('Estou aqui!'); // ('Estou aqui!') -> ARGUMENTO


# OUTRO EXEMPLO
$andar = function($metros)
{
    return "Andei $metros metros";
};

echo $andar (100);


# OUTRO EXMPLO
$a = function()
{
    return "<br><br>Função A";
};

function fale($x){
    echo $x . " (>‿◠)";
}

fale($a());



?>