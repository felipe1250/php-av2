<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>
<body>
    <main>
        <?php
            $Val1 = $_POST["X"];
            $Val2 = $_POST["Y"];
            $Val3 = $_POST["Z"];
            $media = ($Val1 + $Val2 + $Val3) / 3;
            echo "A média é " .$media;
        ?>
    </main>
</body>
</html>