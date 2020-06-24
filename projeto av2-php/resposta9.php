<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>
<body>
    <main>
        <?php
            $Valor = $_POST["X"];
            $ValorAumentado = $Valor * 10.16;
            $ValorDaParcela = $ValorAumentado / 10;

            echo "O valor da parcela fico " .$ValorDaParcela;
            echo("<br>");
            echo "O valor com o aumento foi " .$ValorAumentado;
        ?>
    </main>
</body>
</html> 