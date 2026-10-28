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
        <h1>Medias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']  ?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1"   min="1">
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1"  min="1">
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" min="1" required>
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2"  min="1">
            <input type="submit" value="Calcular Medias">
        </form>
    </main>
    <section>
        <h2>Calculo  das Médias</h2>
        <p>Analisando  os Valores {} e {} :</p>
        <ul>
            <li>A <strong> Média Aritmética Simples</strong> entre os valores e igual  a {}.</li>
            <li>A<strong> Média Aritmética Ponderada</strong> com  pesos {} e {} é  igual  a {}.</li>
        </ul>
    </section>
</body>
</html>