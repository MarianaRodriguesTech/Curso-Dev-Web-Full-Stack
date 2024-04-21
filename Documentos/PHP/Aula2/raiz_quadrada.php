<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

    <h1>Resultado:</h1>

    <?php
 $valor = $_GET["valor"];
 echo "O valor enviado foi o $valor";

 $rq = sqrt($valor);
 
 echo "<p> A raiz de $valor é igual a $rq.</p>";
 ?>
    
 <p><a href="raiz.html">Voltar</a></p>



</body>
</html>