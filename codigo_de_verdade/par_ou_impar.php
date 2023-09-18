<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="codigo_de_verdade/style.css"> <!-- Modificação no caminho do arquivo CSS -->
    <title>Par ou Ímpar</title>
</head>

<body>
    <main>
        <form id="calculo" method="get" action="codigo_de_verdade/par_ou_impar.php"> <!-- Modificação na URL do formulário -->
            <input type="text" name="valor" placeholder="Digite seu número aqui">
            <button type="submit">DESCOBRIR</button>
        </form>
        <div class="caixa">
            <h1>O Número é Impar ou Par?</h1>
            <?php
            error_reporting(0); // Adicionei esse comando porque estava quebrando a formatação do CSS a mensagem de erro que ocorre por não ter inserido nenhum valor.
            $numero = $_GET ['valor'];

            if ($numero % 2 == 0)
            {
                echo '<p class="resultado">Par</p>'; // Modificação para o uso do CSS
            }
            else
            {
                echo '<p class="resultado">Ímpar</p>'; // Modificação para o uso do CSS
            }
            ?>
        </div>
    </main>
</body>
</html>