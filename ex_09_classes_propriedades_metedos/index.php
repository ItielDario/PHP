<?php
$limpa = '<br>';
$linha = '<hr>';

# CLASSES - INTRODUÇÃO À (OPP) - PROGRAMAÇÃO ORIENTADA A OBJETOS

# UMA CLASSE É UM MOLDE/FORMA/MODELO A PARTIR DO QUAL CRIAMOS UM OBJETO.
# EXEMPLO: A CLASSE 'HUMANO' É UM MOL=DELO PARA, A PARTIR DELA, CRIARMOS UM CONJUNTO DE HOMENS E MULHERES,
# CADA UMPARTILHANDO O MESMO 'MOLDE' MAS COM PROPRIEDADES E FUNÇÕES COM VALORES DIFERENTES.
# HOMEM E MULHERES TEM AMBOAS CABELO, MAS O HOMEM PODE TER CABELO ESCURO E A MULHER CABELO CLARO

/* CLASS HUMANO:
    -> CABELO
    -> GENERO
    -> PESO
    -> CAMINHAR
*/

/* HOMEM -> HUMANO
    -> CABELO - CASTANHO
    -> GENERO - MASCULINO
    -> PESO - 75
    -> CAMINHAR()
*/

/* MULHER -> HUMANO
    -> CABELO - CLARO
    -> GENERO - FEMININO
    -> PESO - 63
    -> CAMINHAR()
    -> CANTAR() - PODE TER FUNÇÕES ADICIONAIS
*/


# AS CLASSES SAO DEFINICADAS PELO SEU NOME E POR UM BLOCO DE CÓDIGO QUE CONÉM AS SUAS PROPRIEDADES E MÉTODOS
# O NOME DEVE SER SEMPRE ATRIBUIDO NA FORMA DE StudlyCaps/PascalCase/MixedCase

class Humano
{
    // PROPRIEDADES E MÉTODOS
}

class JogadorFutebol
{
    // PROPRIEDADES E MÉTODOS
}


# O CORPO DE UMA CLASSE CONTÉM PROPRIEDADES E MÉTODOS 
# PROPRIEDADES -> SÃO VARIÁVEIS QUE GUARDAM AS CARACTERÍSTICAS DO OBJETO.
# MÉTODOS -> SÃO FUNÇÕES QUE DEFINEM O QUE O OBJETO PODE FAZER.

# AS PROPRIEDADES TAMBÉM SÃO CONHECIDAS COMO FIELDS (CAMPOS) OU ATRIBUTOS DE UMA CLASSE
# AS PROPRIEDADES TÊM QUE TER UM NÍVEL DE ACESSO ESPECÍFICADO

class FiguraGeometria
{
    public $largura, $altura;   // PROPRIEDADES DE TODAS AS FIGURAS GOEMETRICAS
    public $x;                  // PROPRIEDADES DE TODAS AS FIGURAS GOEMETRICAS
    public $y;                  // PROPRIEDADES DE TODAS AS FIGURAS GOEMETRICAS

    function novaArea($a, $b)   // MÉTODOS DE TODAS AS FIGURAS GOEMETRICAS
    {
        return $a * $b;
    }
}


# PARA ACENDER ÀS PROPRIEDADES DE UMA CLASSE, DENTRO DOS MÉTODOS DA CLASSE -----------------------------------------------
# É USADA A PSEUDO VARIÁVEL $this SEGUIDA DO OPERADOR SETA ->

class SerHumano
{
    public $nome = 'João';            // PROPRIEDADE
    public $sobrenome = 'Ribeiro';    // PROPRIEDADE

    public function nomeCompleto()    // MÉTODO
    {
        $nome = 'Ana';                // VARIÁVEL COMUM (NÃO É UMA PROPRIEDADE)

        return $this->nome . ' ' . $this->sobrenome;    // JUNTADO DUAS PROPRIEDADES
    }
}


# AS CLASSAS RECORREM À UTILIZAÇÃO DE ACCESS MODIFIERS (NÍVEIS DE ACESSO)
# OS NÍVEIS DE ACESSO AS DADOS INDICAM SE PODEMOS VER OS DADOS APENAS DENTRO DA CLASSE, SE PODEMOS VER OS DADOS FORA DA 
# CLASSE OU SE ESTÃO PROTEGIDOS POR ALGUM MOTIVO



# INSTANCIAR UM OBJETO 
# UM OBJETO É UMA VARIÁVEL CRIADA A PARTIR DE UMA CLASSE.
# INSTANCIAR UM OBJETO É CRIAR UM OBJETO A PARTIR DE UMA CLASSA ATRIBUINDO À VARIÁVEL A EXPRESSÃO NEW E O NOME DA CLASSE

$homem = new SerHumano();   // NOVA CÓPIA DE SER HUMANO



# COM A IMPLEMENTAÇÃO ANTERIOR PODEMOS AGORA ACEDER ÀS PROPRIEDADES E MÉTODOS DA CLASSE SerHumano

echo $homem->nomeCompleto() . $linha;   // João Ribeiro



# JUNTANDO TUDO 

class Humano1
{
    public $nome = 'João';
    public $sobrenome = 'Ribeiro';

    public function nome_completo()
    {
        return $this->nome . ' ' . $this->sobrenome;
    }
}

$homem = new Humano1;
echo $homem->nome_completo() . $linha;  // João Ribeiro


# CONSTRUCTOR (É UM MÉTODO ESPECIAL DENTRO DE UMA CLASSE) -----------------------------------------------------------------
# SEMPRE É EXECULTADO AUTOMÁTICAMENTE QUANDO CRIADO UM OBJETO A PARTIR DE UMA CLASSE.
# ESSE MÉTODO É DEFINIDO DE UMA FORMA ESPECIAL COM '__' (DOIS UNDERSCORES)
# SÃO CHAMADOS DE MÉTODOS MÁGICOS POIS TEM UMA EXECULÇÃO ESPECÍFICA OU ATUROMÁTICA ASSOCIADA.

class Humano2
{
    private $nome;
    private $sobrenome;

    function __construct($n, $s)    // ESSE MÉTODO É AUTOMATICAMENTE INICIADO QUANDO HOVER A CRIAÇÃO DE UM OBJETO
    {
        $this->nome = $n;
        $this->sobrenome = $s;
    }

    public function nomes_completo(){
        return $this->nome . ' ' . $this->sobrenome;
    }
}

$homem = new Humano2('Hugo', 'Joaquim');
$mulher = new Humano2('Ana', 'Martins');

echo $homem->nomes_completo();
echo $limpa;
echo $mulher->nomes_completo();



# CONSTRUCTOR SEM PARÂMETROS
# PODEMOS INSTANCIAR OBJETOS DAS SEGUINTES FORMAS:

class HumanoExemplo
{
    function __construct()
    {
        // CÓDIGO
    }
}

$homem = new HumanoExemplo;
# OU
$homem = new HumanoExemplo();
echo $linha;



# OUTRO EXEMPLO
class Humano3_1
{
    public $nome;
    public $sobrenome;
}

class Humano3_2
{
    public function falar()
    {
        // CÓDIGO
    }

    private function andar()
    {
        // MÉTODO ACESSÍVEL APENAS DENTRO DAS CLASS
    }

    public function movimento(){
        $this->andar();  // ESSE MÉTODO ESTA DENTRO DA CLASSE E PODE CHAMAR O 'andar()'
    }
}

# PODEMOS TER CLASSES SEM PROPRIEDADES OU MÉTODOS 

# AO INSTANCIAR A CLASSE Humano3_1 PODEMOS ACEDER DIRETAMENTE ÁS SUAS PROPRIEDADES, PELO FATO DE ESTARAM COM
# O ACCESS MODIFIER 'public'

$homem = new Humano3_1();
$homem->nome = "João";
$homem->sobrenome = "Ribeiro";

$mulher = new Humano3_2();
$mulher->movimento();  // ESSE MÉTODO PODE SER ACESSADO FORA DA CLASSE, POIS O SEU ACCESS MODIFIERS É PUBLIC



# NO PHP 8 FOI INSERIDO O PROPERTY PROMOTION NO CONSTRUTOR
# DEFINE PROPRIEDADES DIRETAMENTE NOS PARÂMENTROS DO CONSTRUTOR

# ANTES:
class Humano5
{
    public $nome;
    public $sobrenome;

    function __construct($n, $s)
    {
        $this->nome = $n;
        $this->sobrenome = $s;
    }
}

# PODEMOS CRIAR A MESMA CLASSE DA SEGUINTE FORMA:
class Humano6
{
    function __construct($nome, $sobrenome)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }
}

$homem1 = new Humano5('Marcelo', 'Fernando');
$homem2 = new Humano6('Victor', 'Silva');

echo $homem1->nome . ' ' . $homem1->sobrenome;
echo $limpa;
echo $homem2->nome . ' ' . $homem2->sobrenome;

?>