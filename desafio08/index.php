<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $numero = $_GET['num']?? 1;
     ?>
    <main>
        <h1>Informe um numero</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="num">Numero</label>
        <input type="number" name="num" id="num" value="<?= $numero ?>">
        <input type="submit" value="Calcular Raizes">
    </form>
    </main>
    <section>
        <h2>Resultado Final </h2>
        <?php 
            $rq = $numero ** (1/2);
            $rc = $numero ** (1/3);

            print "analisando o numero <strong>$numero</strong>, temos:";
            print "<ul><li> A sua raiz quadrada é " . number_format($rq, 3, ",", ".")."</li>";
            print "<li> A sua raiz cubica é " . number_format($rc, 3 , "," , ".")."</li></ul>";
            
        ?>
    </section>
</body>
</html>