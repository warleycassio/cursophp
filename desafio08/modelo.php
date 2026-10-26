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
        <input type="number" name="num" id="num" value="">
        <input type="submit" value="<?= $numero ?>">
    </form>
    </main>
    <section>
        <h2>Resultado Final </h2>
        <?php 
        
        ?>
    </section>
</body>
</html>