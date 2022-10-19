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

 
?>