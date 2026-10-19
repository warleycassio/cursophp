<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
$inicio = date("m-d-Y", strtotime("-7 days"));
$fim = date("m-d-Y");

$parametros = http_build_query([
    "@dataInicial" => "'$inicio'",
    "@dataFinalCotacao" => "'$fim'",
    '$top' => 1,
    '$orderby' => "dataHoraCotacao desc",
    '$format' => "json",
    '$select' => "cotacaoCompra,dataHoraCotacao"
], "", "&", PHP_QUERY_RFC3986);

$url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/"
    . "CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?"
    . $parametros;

$contexto = stream_context_create([
    "http" => ["timeout" => 15]
]);

$resposta = @file_get_contents($url, false, $contexto);
$dados = $resposta !== false
    ? json_decode($resposta, true)
    : null;

$cotacao = (float) ($dados["value"][0]["cotacaoCompra"] ?? 0);

if ($cotacao <= 0) {
    echo "<p>Não foi possível obter a cotação. Tente novamente mais tarde.</p>";
} else {
    $real = (float) ($_REQUEST["din"] ?? 0);
    $dolar = $real / $cotacao;

    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "<p>Seus "
        . numfmt_format_currency($padrao, $real, "BRL")
        . " equivalem a "
        . numfmt_format_currency($padrao, $dolar, "USD")
        . "</p>";
}
?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>
</body>
</html>