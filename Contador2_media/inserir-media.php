<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de Média Online</title>

    <style>

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            width: 400px;
            border: 1px solid;
            border-radius: 6px;
            padding: 12px;
            text-align: center;
        }

        form div {
            margin: 6px;
        }

        form label {
            display: inline-block;
            width: 80px;
            text-align: right;
            margin-right: 12px;,
        }

    </style>

</head>
<body>
    <h1>Digite suas notas:</h1>
    <form action="calcular-media.php" method="post">
        <div>
            <label for="nota1">Nota 1:</label>
            <input type="number" size="2"
                id="nota1" name="nota1" step="any" required
            >
        </div>
        <div>
            <label for="nota2">Nota 2:</label>
            <input type="number" size="2"
                id="nota2" name="nota2" step="any" required
            >
        </div>
        <div>
            <button>Entrar</button>
        </div>
    </form>
</body>
</html>