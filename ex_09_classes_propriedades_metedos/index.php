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
echo $homem2->nome . ' ' . $homem2->sobrenome . $linha;



# CLASSE ANÔNIMAS (QUANDO QUEREMOS INSTANCIAR APENAS UM OBJETO DESSA CLASSE) ----------------------------------------------
# EXEMPLO CLASSE NORMAL:
class Objeto1
{
    function teste()
    {
        echo 'Teste - Normal';
    }
}

$a = new Objeto1();


# EXEMPLO COM CLASSE ANÔNIMA:
$b = new class
{
    function teste()
    {
        echo 'Teste - Classe anônima';
    }
};      //PRECISA DE ';'

echo $a->teste();
echo $limpa;
echo $b->teste() . $linha;



# HERANÇA | INHERITANCE --------------------------------------------------------------------------------------------------
# MECANISMO QUE UTILIZAMOS PARA CRIAR UMA CLASSE QUE HERDA AS PROPRIEDADES E MÉTODOS DE OUTRA CLASSE

# A CASSE INICAL A PARTIR DA QUAL AUTRAS VÃO SER CRIADAS É DESIGNADA 'CLASSE BASE'
# AS CLASSES QUE VÃO HERDAR AS PROPRIEDADES E MÉTODOS DA CLASSE BASE É CHAMADA DE 'CLASSE DERIVADA'

# EXEMPLO 01 -> CLASS TRADICIONAL:
class Animal1
{
    public $especia;
    public $peso;

    function tipoEspecie()
    {
        return "Este animal é da especie {$this->especie}";  // {} -> CONCATENAÇÃO
    }
}

$animal = new Animal1();
$animal->especie = 'Mamiferos';
echo $animal->tipoEspecie() . $limpa;


# EXEMPLO 2.1 -> UMA CLASSE BASE
class Animal
{
    public $especie;
    public $peso;

    function tipoEspecie()
    {
        return "Este animal é da espécie {$this->especie}";
    }
}

# EXEMPLO 2.2 -> UMA CLASSE COM HERANÇA
class Mamifero extends Animal      // extends -> EXPERSSÃO PARA HERDAR UMA CLASSE A PARTIR DE OUTRA
{
    // NÃO É NECESSÁRIO VOLTAR A DEFINIR AS PROPRIEDADES E MÉTODOS DA CLASSE BASE
    // AS PROPRIEDADES E MÉTODOS DA CLASSE BASE FORAM IMPORTADAS PARA CÁ 

    // PODEMOS ACRECENTAR OUTRAS PROPRIEDADES E OUTROS MÉTODOS
    public $quantidade_pernas;
    public $tem_pelo;

    function temQuantasPernas()
    {
        return "O animal da espécie {$this->especie} tem {$this->quantidade_pernas} pernas";
    }
}

$homem = new Mamifero();
$homem->especie = 'Homo Sapiens';
$homem->quantidade_pernas = '2';
echo $homem->temQuantasPernas() . $linha;



# OVERRIDING ------------------------------------------------------------------------------------------------------------
# PERMITE QUE UMA CLASSE DERIVADA TENHA MÉTODOS REESCRITOS ESPECIFICAMENTE PARA ESSA CLASSE

# POR EXEMPLO PODEMOS TER UM MÉTODOS 'teste' NA CLASSE BASE E
# TER O MESMO MÉTODO 'teste' COM UM CÓDIGO DIFERENTE NA CLASSE DERIVADA
class Animais
{
    function mover()
    {
        echo 'Mover a partir da classe base.';
    }
}

class Mamiferos extends Animais
{
    // METODO mover()
}

class Peixes extends Animais
{
    function mover()    // ALTERANDO O MÉTODO mover()
    {
        echo 'Mover a partir da classe Peixe.';
    }
}

$animais = new Animais();
echo $animais->mover() . $limpa;

$mamiferos = new Mamiferos();
echo $mamiferos->mover() . $limpa;

$peixes = new Peixes();
echo $peixes->mover() . $limpa . $limpa;


# TAMBÉM É APLICÁVEL ÀS PROPREDADES
class Animals
{
    public $especie = 'Ave';
}

class Mamifers extends Animals
{
    public $especie = 'Cavalo';
}

$a = new Animals();
echo $a->especie . $limpa;

$b = new Mamifers();
echo $b->especie . $linha;



# OVERRIDE (PARENT CLASS) ------------------------------------------------------------------------------------------------
# É A CLASSE A PARTIR DA QUAL FAZEMOS A DERIVAÇÃO
class Retangulo
{
    public $largura, $altura;

    function __construct($l, $a)
    {
        $this->largura = $l;
        $this->altura =$a; 
    }

    function calculaArea()
    {
        return $this->largura * $this->altura;
    }
}

class Quadrado extends Retangulo
{
    function __construct($l)
    {   
        $this->largura = $l;
        $this->altura = $l;
    }
}

$retang = new Retangulo(10, 20);
$quad = new Quadrado(10);

echo $retang->calculaArea() . $limpa;
echo $quad->calculaArea() . $limpa;


# PODEMOS CHAMAR O CONSTRUCT DA CLASSE BASE USANDO A EXPRESSÃO 'parent'
class Quadrado_1 extends Retangulo
{
    function __construct($l)
    {
        parent::__construct($l, $l);  // VÁ AO CONSTRUCT DA CLASSE PAI PASSA ESSES DOIS ARGUMENTOS QUE ELA PEDE
    }
}

$quad_1 = new Quadrado_1(5);
echo $quad_1->calculaArea();

# OU

class Quadrado_2 extends Retangulo
{
    function __construct($l)
    {
        Retangulo::__construct($l, $l);
    }
}
echo $linha;



# FINAL (IMPEDE QUE UMA CLASSE DERIVADA POSSA FAZER OVERRIDE DE MÉTODOS) -------------------------------------------------
class Veiculo
{
    final function mover() // FINAL -> NÃO PERMITE A CRIAÇÃO DE CÓDIGOS ALTERNATIVOS A ESSA FUNÇÃO
    {
        // CÓDIGO
    }
}

class Bicicleta extends Veiculo
{
    /*
    function mover()  // ERRO
     {
         // OVERRIDE DO GÓDIGO ORIGINAL
    }
    */
}


# PODEMOS DEFINIR UMA CLASS COMO NÃO SENDO PASSÍVEL DE SER HERDADA
final class Humano7
{
    // CÓDIGO
    function teste()
    {
        echo 'Teste';
    }
}

/*
class Homem extends Humano7     // ERRO
{
    // CÓDIGO
}

$a = new Homem();
echo $a->teste();
*/



# ACCESS LEVELS (NÍVEIS DE ACESSO) ----------------------------------------------------------------------------------------
# EXISTEM 3 TIPOS DE ACCESS LEVELS (PUBLIC, PROTECTED, PRIVATE)

class MinhaClasse
{
    public $variavel1;
    protected $variavel2;
    private $variavel3;
}

$a = new MinhaClasse();

$a->variavel1 = '111';    // POSSIVEL
//$a->variavel2 = '222';    // NÃO É POSSIVEL. RESULTA EM ERRO
//$a->variavel3 = '333';    // NÃO É POSSIVEL. RESULTA EM ERRO


# PUBLIC
# OS MEMBROS PUBLICOS (PROPRIEDADES OU MÉTODOS) DE UMA CLASSE, ESTÃO SEMPRE ACESSIVEIS.
class TudoPublico
{
    public $propriedade;
    public function metodo()
    {
        echo 'Método publico';
    }
}

$a = new TudoPublico();
$a->propriedade = 'a';
$a->metodo();
echo $limpa . $limpa;


# PROTECTED
# PODE SER ALCANÇADO DENTRO DA CLASSE E DENTRO ALGUMA CLASSE QUE SEJA EXTENÇÃO DE OUTRA (CLASSE DERIVADA)
class ClasseTeste           // CLASSE BASE
{
    public $publica = "a";
    protected $protegida = "b";
    private $privada = "c";
}

class ClasseDerivada extends ClasseTeste      // CLASSE DERIVADA
{
    function teste()
    {
        echo $this->publica ."<br>" ;   // POSIVEL
        echo $this->protegida;          // POSIVEL
        //echo $this->privada;          // ERRO
    }
}
$a = new ClasseTeste();
$a->publica = '1';           // POSSIVEL     
// $a->protegida = '2';      // ERRO
// $a->privada = '3';        // ERRO

$b = new ClasseDerivada();
$b->publica = '4';           // POSSIVEL
// $b->protegida = '5';      // ERRO
// $b->privada = '6';        // ERRO

$b->teste();
echo $limpa . $limpa;


# PRIVATE (SÓ PODE SER VISIVEL DENTRO DA SUA PROPRIA CLASSE )
# NÃO É VISIVEL NOS OBJETOS INSTANCIADOS NEM NOUTRAS CLASSES DERIVADAS

# -----------
# AO CONTRÁRIO DAS PROPRIEDADES, OS MÉTODOS NÃO NECESSITAM DE TER UM ACCESS LEVEL ESPECIFICADO.
# SE NÃO FOR IDENTIFICADO O MÉTODO É CONSIDERADO PUBLICO
class Testes
{
    private $valor = '1000';    // SÓ É POSSIVEL ACESSAR DENTRO DESTA CLASSE

    function mover()    // METODO PUBLICO
    {
        echo $this->valor;      
    }
}

$a = new Testes();
$a->mover();
//$a->valor = '2000';  // ERRO
echo $limpa . $limpa;


# VAR KEYWORD (TEM O MESMO COMPORTAMENTO QUE O PUBLIC) 
# EXISTE APENS POR RETROCOMPATIBILIDADE DEVIDO AOS CÓDIGOS ESCRITOS NO HTML 5.
# NÃO É RECOMENDADO POIS PODE PASSAR A SER NÃO SUPORTADO OU OBSOLETO.
class Homem
{
    var $nome, $sorenome;
}

$eu = new Homem();
$eu->nome = 'João';
$eu->sobrenome = 'Ribeiro';

echo $eu->nome . '  ' .  $eu->sobrenome . $limpa . $limpa;


# OBJECT ACCESS
# UM OBJETO INSTACIADO A PARTIR DE UMA CLASSE PODE  ACEDER A ELEMENTOS PRIVADOS E PROTEGIDOS DE OUTRO OBJETO
# CRIADO A PARTR DA MESMA CLASSE.
class Homens
{
    private $nome = 'x';

    function setPrivate($objeto, $valor)
    {
        $objeto->nome = $valor;       // $b->nome = Joao 
    }

    function apresentar()
    {
        echo $this->nome;
    }
}

$a = new Homens();
$b = new Homens();
$a->setPrivate($b, 'Joao');

$a->apresentar();
echo $limpa;   
$b->apresentar();
echo $limpa;


# UMA BOA PRÁTICA É CRIAR O MENOR NÚMERO DE PROPRIEDADES DE UMA CLASSE COMO PUBLICAS
# POIS, ISSO É EXPOR DEMAIS ESSE PROPRIEDADE.
# EXEMPLO: A PROPRIEDADE DE UMA CLASSE TEM QUE SER SEMPRE O MESMO NÚMERO.
class Homem_2
{
    public $idade;
}

$eu = new Humano();
$eu->idade = 'Olá mundo';     // ISTO É POSSIVEL POIS O PHP NÃO É STRONGLY TYPED



# GETTERS E SETTERS ------------------------------------------------------------------------------------------------------
# PARA DEFINIR COARRETAMENTE ESTE TIPO DE SITUAÇÕES, PODEMOS USAR MÉTODOS PARA DEFINIR E 
# IR BUSCAR OS VALORES DAS PROPRIEDADES PRIVADAS. 
# ESTES MÉTODOS PERMITEM GARANTIR QUE A INTEGRIDADE DAS PROPRIEDADES SEJAM MANTIDAS
class Homem_3
{
    private $idade;
}

// $eu->idade = 'João';       // NÃO É POSSIVEL PORQUE A PROPRIEDADE É PRIVADA
echo $limpa;


# MELHORANDO
class Homem_4
{
    private $idade = 0;

    public function setIdade($valor)    // DEFINE O VALOR
    {
        # VERIFICA SE O $VALOR É NUMÉRICO
        if(is_numeric($valor)){
            $this->idade = $valor;
        }
    }

    public function getIdade()      // BUSCA O VALOR
    {
        return $this->idade;
    }
}

$eu = new Homem_4();
$eu->setIdade('João');
echo $eu->getIdade();


# OUTRO EXEMPLO
class Tempo
{
    private $segundos;

    // ----------------------------------------------------
    function setSegundo($valor)
    {
        if(!is_numeric($valor) || $valor < 0){
            $this->segundos = 0;
        }
        else{
            $this->segundos = $valor;
        }
    }

    // ----------------------------------------------------
    function getMinutos()
    {
        return $this->segundos / 60;       // DEFININDO MINUTOS
    }

    // ----------------------------------------------------
    function setMinutos($valor)
    {
        if($valor == 0){
            $this->segundos = 0;
        }
        else{
            $this->segundos = $valor * 60;  // DEFININDO SEGUNDOS
        }
    }
}
echo $linha;



# STATIC ------------------------------------------------------------------------------------------------------------------
# PODE SER USADA PARA DECLARAR PROPRIEDADES OU METODOS DE UMA CLASSE QUE PODEM SER ACENDIDOS
# SEM QUE SEJAM NECESSARIO CRIAR UM OBJETO A PARTIR DESTA CLASSE.

class Testando
{
    // INSTANCE MEMBERS - CADA OBJETO CRIADO A PARTIR DA CLASSE POSSUI SUAS PROPRIEDADES E MÉTODOS
    public $nome;
    function teste()
    {
        // CODIGO
    }

    // STATIC OU CLASS MEMBERS - APENAS EXISTENTES UMA VEZ NA CLASSE
    static $idade;
    static function mover()
    {
        // CODIGO
    } 
}


# EXEMPLO:
class Operacoes
{
    static $valor1;
    static $valor2;

    static function adicionar()
    {
        return self::$valor1 + self::$valor2;     // SELF -> EU PROPRIO
        // OU return Operacoes::$valor1 + Operacoes::$valor2;
    }

    static function hashAleatoria()
    {
        return rand(0,1000);      // RAND() -> SORTEIO
    }
}

Operacoes::$valor1 = 10;        // ATRIBUINDO UM NUMERO A VARIAVEL $valor1
Operacoes::$valor2 = 20;        // ATRIBUINDO UM NUMERO A VARIAVEL $valor2
echo Operacoes::adicionar() . $limpa;    // CHAMANDO O METODO adicionar()

$hash = Operacoes::hashAleatoria();
echo $hash . $limpa . $limpa;


# EXEMPLO PRATICO DE STATIC:
class Operacao
{
    // RETORNA UM NUMERO SORTEADO ENTRE $min E $max
    static function numeroAleatorio($min, $max)
    {
        return rand($min, $max);
    }

    static function calcularFormula($a, $b)
    {
        // (A * 2) + (B * A)
        return($a * 2) + ($b * $a);
    }

    static function criarUmNome()
    {
        $nomes = ['João', 'Ana', 'Carlos', 'Francisco', 'Rui', 'Itiel'];
        $sobrenome = ['Silva', 'Almeida', 'Santos', 'Rodrigues', 'Oliveira'];
        return $nomes[rand(0, count($nomes) - 1)] . ' ' . $sobrenome[rand(0, count($sobrenome) - 1)];
    }
}

echo Operacao::numeroAleatorio(0, 1000) . $limpa;

echo Operacao::calcularFormula(10, 20) . $limpa;

for ($i = 0; $i < 10; $i++){
    echo Operacao::criarUmNome() . ' | ';
}
echo $linha;



# CLASSES ABSTRATA -------------------------------------------------------------------------------------------------------
# É CONSTITUIDA POR UMA IMPLEMENTAÇÃO PARCIAL A PARTIR DAS QUAIS OUTRAS CLASSES PODEM CRESCER
# POSSUI MÉTODOS IMCOMPLETOS QUE, OBRIGATÓRIAMENTE TEM QUE SER IMPLEMENTADOS NAS CLASSES DERIVADAS

# NÃO PODEM SER INSTANCIADAS. SERVEM APENAS PARA PODEREM SER HERDADAS POR OUTRAS CLASSES

abstract class Forma
{
    public $largura = 100;
    public $altura = 200;

    abstract public function area();
    
    function altura()
    {
        return $this->altura;
    }
}

# $quadrado = new Forma();  // ISSO NÃO É PERMITIDO

class Retangulos extends Forma
{
    public function area()
    {
        return $this->largura * $this->altura;
    }
}

$r = new Retangulos();
echo $r->area() . $limpa;
echo 'Altura = ' . $r->altura() . $linha;



# TRAITS (GRUPO DE MÉTODOS QUE PODEM SER INSERIDOS DENTRO DE UMA CLASSE) -------------------------------------------------

trait MinhasHabilidades   // AS REGRA PARA DA NOMES O TRAITS É A MESMA PARA DAR NOMES A CLASSES
{
    public function falar($mensagem)
    {
        echo "Eu digo: $mensagem";
    }

    public function saltar($metros)
    {
        echo "Eu salto $metros metros.";
    }
}

# A CLASSE QUE NECESSITAREM USAR ESTES MÉTODOS DO TRAIT, APENAS TARÃO QUE TER O SEGUINTE:

class SeresHumano
{
    use MinhasHabilidades;   // CHAMA O TRAIT 
}

$h = new SeresHumano();
echo $h->falar('I enjoy play basketbal') . $limpa;
echo $h->saltar(3);

?>