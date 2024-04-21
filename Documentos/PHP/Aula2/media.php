<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    echo "As notas enviadas foram $nota1 e $nota2";
    $media = ($nota1 + $nota2) / 2;
    echo "<p>A média de $nota1 e $nota2 é igual $media";
    ?>

    <p><a href="media.html">Voltar</a></p>

</body>
</html>