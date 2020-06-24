<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>
<body>
    <main>
          <?php
               $n1 = $_POST["X"];
               $n2 = $_POST["Y"];
               $j = 0;
               $soma = 0;

               for($i=1;$i<=100;$i++){
                    $a[$i-1] = rand($n1,$n2);
                }
           

                for($i=1;$i<=100;$i++){


                    if(($a[$i-1]%2) == 0){
                    
                      if($j <= 9){    
                        $b[$j] = $a[$i-1];
                    
                        $soma = $soma + $b[$j];
                      }
                        $j++;
                 
                    }
                }
           

                echo "<BR>";
                echo "O valor da soma dos 10 primeiros numeros foi ".$soma;
          ?>
    </main>
</body>
</html> 