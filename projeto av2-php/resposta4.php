<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>
<body>
    <main>
        <?php
            $metro = $_POST["X"];
            $km=$metro / 3.6;
            echo "O valor convertido para Km é " .$km;
        ?>
    </main>
</body>
</html>