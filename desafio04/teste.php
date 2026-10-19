<pre>
<?php 
    $url ='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'10-05-2026\'&@dataFinalCotacao=\'10-19-2026\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=text/html&$select=cotacaoCompra,dataHoraCotacao';
    $dados = json_decode(file_get_contents($url), true);
    var_dump($dados);
?>
</pre>