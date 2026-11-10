<?php

$nota1 = htmlspecialchars($_POST['nota1']);
$nota2 = htmlspecialchars($_POST['nota2']);

$media = ($nota1 + $nota2) / 2;

if ($media >= 7) {
    $situacao = '<h2 class="aprovado">APROVADO</h2>';
} else if ($media >= 4) {
    $situacao = '<h2 class="recuperacao">RECUPERAÇÃO</h2>';
} else {
    $situacao = '<h2 class="reprovado">REPROVADO</h2>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de Média Online</title>

    <style>

        .aprovado {
            color: blue;
        }

        .recuperacao {
            color: orange;
        }

        .reprovado {
            color: red;
        }
</style>

</head>
<body>
    <h1>Resultado da Média</h1>
    <p>Média: <?php echo $media; ?></p>
    <?php echo $situacao; ?>
</body>
</html>