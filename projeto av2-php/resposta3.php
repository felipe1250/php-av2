<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>
<body>
    <main>
        <?php
            $X = $_POST["X"];
            $Y = $_POST["Y"];
            $QuadradoX = $X * $X;
            $QuadradoY = $Y * $Y;
            $Soma = $QuadradoX + $QuadradoY;
            echo "A soma é " .$Soma;
        ?>
    </main>
</body>
</html>