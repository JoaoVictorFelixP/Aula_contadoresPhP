<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contador</title>

        <style>
            body {
                font: Arial;
            }

            header {
                margin: 2px;
            }

            header img {
                width: 80px;
                height: 80px;
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
                display: inline;
                width: 150px;
                text-align: right;
                margin-right: 12px;
            }
        </style>
    </head>
    <body>
        <header>
            <img src="Images/php_logo.jpg" alt="php_image">
            <h1>Contador em PhP: </h1>
        </header>

        <section>
            <form action="contador.php" method="post">
            <div>
                <label for="inicio">Inicio da contagem: </label>
                <input type="number" size="20" id="inicio" name="inicio" min="1" max="100" required>
            </div>
            <div>
                <label for="fim">Final da contagem </label>
                <input type="number" size="20" id="fim" name="fim" min="1" max="100" required>
            </div>
            <button> Contar </button>
            </form>
        </section>
    </body>
</html>