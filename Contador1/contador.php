<?php
    $inicio = (int)$_POST["inicio"];
    $fim = (int)$_POST["fim"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contador em PHP</title>
    </head>
    <body>
        <h1>Contador em PHP</h1>
        <ul>
        <?php for ($i = $inicio; $i <= $fim; $i++): ?>
            <li><?= $i ?></li>
        <?php endfor; ?>
        </ul>
    </body>
</html>