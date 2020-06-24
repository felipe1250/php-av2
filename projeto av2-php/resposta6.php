html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>
<body>
    <main>
        <?php
            $ValorOriginal = $_POST["X"];
            $ValorDesconto = ($ValorOriginal * 100) / 93;
            $ValorDescontado = $ValorDesconto - $ValorOriginal ;

            echo "O valor original é " .$ValorOriginal;
            echo("<br>");
            echo "O valor com desconto é " .$ValorDesconto;
            echo("<br>");
            echo "O valor que foi descontado é " .$ValorDescontado;
        ?>
    </main>
</body>
</html>