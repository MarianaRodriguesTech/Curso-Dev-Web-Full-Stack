<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
  <div class="php">

  <h1>Resultados</h1>
    <?php
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];

     echo "<p> A soma vale: " . ($numero1+$numero2);
     echo "<p> A subtração vale: ". ($numero1-$numero2);
     echo "<p> A multiplicação vale: ". ($numero1*$numero2);
     echo "<p> A Divisão vale: ". ($numero1/$numero2);
     echo "<p> A pontenciação vale: $numero1<sup>$numero2</sup> = " . pow($numero1,$numero2);
     echo "<p> O módulo vale: ". ($numero1%$numero2);
    ?>
 </div>
</body>
</html>