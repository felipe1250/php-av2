<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>
<body>
    <main>
    <?php
        $X = $_POST["X"];
        $Y = $_POST["Y"];
        $resultado = ($X + $Y) * $X;
        echo "O resultado é " .$resultado;
    ?>
    </main>
</body>
</html> 
