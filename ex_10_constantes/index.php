<?php
$limpa = '<br>';
$linha = '<hr>';

# CONSTANTES (VARIÁVEIS CUJO O VALOR NÃO PODE SER ALTERADO)

# DEFININDO CONSTANTES COM CONST ------------------------------------------------------------------------------------------
# CONST É USADO  PARA DEFINIR CONSTANTES NO CONTEXTO DE CLASSES E SÃO PUBLICAS
# O NOME DEVE SER SEMPRE EM MAIÚSCULO E NÃO É NECESSÁRIO O $ COMO NAS VARIÁVEIS
class Circulo
{
    const PI = 3.14;    // TODAS AS CONSTANTES TEM QUE TER VALOR ATRIBUIDO SEMPRE QUE SÃO DEFINIDAS
}

echo Circulo::PI . $limpa;    // É POSSIVEL APRESENTAR SER INSTANCIAR

$c = new Circulo();    // OU COM INSTANCIAÇÃO
echo $c::PI . $linha;

# O TERMO 'CONST' NÃO DEVE SER APLICADO A VARIAVEIS LOCAIS OU A APARÂMETROS.
# O TERMO 'CONST' PODE SER USADO PARA CRIAR CONSTANTES GLOBAIS

const APP_NAME = 'Minha Aplicação';
echo APP_NAME . $limpa;


function teste()   // DENTRO DE UMA FUNÇÃO
{
    echo APP_NAME;
}
teste();


# NÃO É POSSIVEL CONCATENAR CONSTANTES DA MESMA FORMAQUE FAZEMOS COM VARIAVEIS
echo "<br>Nome: {APP_NAME} .$linha";



# DEFININDO CONSTANTES COM DEFINE ---------------------------------------------------------------------------------------
# A FUNÇÃO DEFINE PERMITE DEFINIR CONSTANTES GLOBAIS E LOCAIS MAS NÃO PERMITE SER USADA DENTRO DE UMA CLASSE

define('APP_NAME_2', 'Minha Aplicação');    // ('NOME DA CONSTANTE', 'VALOR')
define('VERSAO', '1.0.0');
define('MOSTRAR_ERROS', true);
define('PI', '3.14');

echo APP_NAME . $linha;



# CONSTANTS --------------------------------------------------------------------------------------------------------------

# PARA VERIFICAR DE UMA CONSTANTE JÁ EXISTE
if(!defined('APP_NAME_4')){   // SE NÃO ESTÁ DEFINIDA UMA CONSTANTE CHAMADA 'APP_NAME_4'
    define('APP_NAME_4', 'Minha App');    // ENTÃO DEFINA O 'APP_NAME_4'
}
echo APP_NAME_4 . $limpa;


# OU 
defined('CONSTANTE') or define('CONSTANTE', 'Valor');  // PERGUNTA SE A CONSTANTE FOI DEFINIDA, CASO CONTRARIO É DEFINIDA


# DEFININDO UMA CONSTANTE COM ARRAY
const NOMES = ['João', 'Ana', 'Maria'];
echo NOMES[0] . $limpa;


# DEFININDO ARRAY COM DEFINE
define('NAMES', ['João', 'Ana', 'Maria']);
echo NAMES[2] . $linha;



# CONSTANTES MÁGICAS ------------------------------------------------------------------------------------------------------
# SÃO 8 E SÃO DESIGNADAS ASSIM PORUQE O SEU VALOR VARIA AUTOMÁTICAMENTE DEPENDENDO ONDE ESTÃO A SER USADAS

echo __LINE__ . $limpa;  // INDICA O NÚMERO DA LINHA DESTE CÓDIGO NO SCRIPT

echo __FILE__ . $limpa;  // INDICA O CAMINHO COMPLETO DO SCRIPT

echo __DIR__ . $limpa . $limpa;   // INDENTIFICA A PASTA ONDE O SCRIPT ESTÁ ALOJADO


testes();
function testes()
{
    $a = true;
    echo __FUNCTION__ . '<br>' . '<br>';   // INDICA O NOME DA FUNÇÃO
}


class MinhaClasse
{
    function identificar()
    {
        echo __CLASS__ . '<br>';    // INDICA O NOME DA MINHA CLASSE
        echo __METHOD__ . '<br>';   // INDICA O NOME DO MÉTODO
    }
}


$teste = new MinhaClasse();
$teste->identificar();


# __TRAIT__ É UM MECANISMO DE REUTILIZAÇÃO DE CÓDIGO
echo __NAMESPACE__;   // INDICA O NOME DO NAMESPACE ATUAL
?>