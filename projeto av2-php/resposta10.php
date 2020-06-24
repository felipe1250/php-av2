<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>
<body>
    <main>
        <?php
            $Km = $_POST["Km"];
            $Litros = $_POST["Litros"];
            echo "O valor do consumo medio foi " .$ConsumoMedio = $Km / $Litros;
        ?>
    </main>
</body>
</html> 