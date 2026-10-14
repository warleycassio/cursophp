<!DOCTYPE html>
<html lang="pt-be">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>explos php </title>
</head>
<body>
    <?php 

    //double quoted
    $nome ="gustavo";
    $sobrenome ="guanabara";
    echo "$nome $sobrenome \u{1f596}";
     //single quoted 
    $nome ="gustavo";
    $sobrenome ="guanabara";
    echo '$nome $sobrenome \u{1f596}';
    
    // juntar contantes string 
    const CANAL = "Curso em video \u{1f499}";
    echo "eu adoro o CANAL "; 
    echo 'eu adoro o CANAL ';
    echo "eu adoro ". CANAL;//CORRETO
    // mais explos 
    echo " Estamos no ano de " . date('Y');
    //explos sequencia de escape 
    $nome = "gustavo";
    $sobrenome = "guanabara";
    $apelido = "Gafanhoto";
    echo " $nome \"$apelido\" $sobrenome";
    
    
    ?>
</body>
</html>