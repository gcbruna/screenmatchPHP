<?php 
//esse require vai tentar achar o arquivo com funcoes.php dentro dessa mesma pasta do screenMatch
require __DIR__ . "/funcao.php";

echo "Olá, mundo!\n";

$nomeFilme = "Top Gun - Maverick"; //variaveis com $

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

    //inicialização;condição da repetição; incremento
for ($contador = 1; $contador < $argc; $contador ++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;


$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

//concatenações diferentes
echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme \n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento); //recebendo como parametro a variavel anoLancamento, 
//exibeMensagemLancamento(1999).  pois dentro dela esta o ano que queremos. Senão podemos por essa outra forma (1999)



//criei uma variavel e abribuo a expressão 'match' - expressão de encontro/casamento
//estamos tentando casar a expressão '$nomeFilme' com algum desses valores, abaixo  
$genero = match ($nomeFilme) {  //compara valores
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnorok" => "super-herói", //essa setinha indica o que essa expressão vai valer 
    "Se beber não case" => "comédia",

    default => "gênero desconhecido",
};

echo "o gênero do filme é: $genero";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];

echo $filme['nome'];

var_dump($notas);
sort($notas);
var_dump($notas);
$menorValor = min($notas);
var_dump($menorValor);

var_dump($filme['nome']);
                    //Para buscar a posição de algo, seja de uma string ou de um pedaço de string dentro de outra string  (posição na string)
$posicaoDoisPontos = strpos($filme['nome'], ':') ;
var_dump($posicaoDoisPontos);
        //extrair uma substring, ou seja, queremos pegar um pedaço de uma string.
var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));

/*
//formato que possamos manipular via código
//Essa função pega uma variável em PHP, ou um valor qualquer em PHP, e transforma no formato JSON.
echo json_encode($filme);

//se temos essa string em JSON, e queremos transformar ela em algo que o PHP entende.       //array associativo
var_dump(json_decode('{"nome":"Thor: Ragnarok", "ano":2021, "nota":7.8, "genero":"super-her\u00f3i"}', true));
//A função json_decode vai receber uma string como primeiro parâmetro e transformá-la em um objeto por padrão. Ao passar true como segundo parâmetro, o PHP retornará um array associativo ao invés de um objeto.
*/

$filmeComoStringJson = json_encode($filme);
// colocar conteúdo dentro de um arquivo. Essa função literalmente coloca conteúdo em um arquivo
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson); //caminho do arquivo
//usar caminhos absolutos para arquivos .  será o nome do nosso arquivo . é o que vamos escrever nesse arquivo, que normalmente é uma string       