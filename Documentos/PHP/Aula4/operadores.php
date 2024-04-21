<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>

   <!-- Operadores Básicos -->

   <!-- Ordem de Precedência (Ordem que calculamos)
   1 Oque está dentro dos parentêses 
   2 Multiplicação, Divisão e módulo (Da esquerda para a direita)
   3 Adição e Subtração -->

    <?php
    $n1 = 5.7;
    $n2 = 3;

    echo "<br> A soma vale: ".($n1+$n2);
    echo "<br>";
    echo "<br> A subtração vale: ".($n1-$n2);
    echo "<br>";
    echo "<br> A multiplicação vale: ".($n1*$n2);    
    echo "<br>";
    echo "<br> A divisão vale: ".($n1/$n2); 
    echo "<br>";
    echo "<br> O módulo vale: ".($n1%$n2);
    echo "<br><br>";

    // Errado, sem parenteses
    $media = $n1 + $n2/2;
    echo "<br/>A media vale $media";

    // Correto, com parenteses
    $media = ($n1 + $n2)/2;
    echo "<br/> A media vale $media";

    echo "<br><br>";
    
    // Funções

    // abs ( transforma valor negativo em positivo)
    $n3 = -7;
    echo "Valor absoluto é: " .abs($n3);

    echo "<br>";

    // pow (potencia)
    echo "<br> $n1<sup>$n2</sup> = " . pow($n1,$n2);

    echo "<br>";


    // round(arredondando)
    echo "<br> A divisão vale: " . round($n1/$n2); 

    // Escolhemos a quantidade de casas decimais adicionando , e dps o número que quer
    echo "<br> A divisão vale: " . round($n1/$n2,2); 
    
    echo "<br>";
    // sqrt é para obter a raiz quadrada dos números

    // Para achar a raiz e também escolher a quantidade de casas decimais
    echo "<br> A raiz de $n1 é: " .  round(sqrt($n1),3);

    // Arredonda valor quebrado para cima(mais) = Teto
    echo "<br> Função Ceil: " . ceil($n1);

    // Arredonda valor quebrado para baixo(menos) = Piso
    echo "<br> Função Floor: " . floor($n1);

    // Excluiu as casas decimais e manteve apenas a parte inteira
    echo "<br> A parte inteira de $n1 é: " . intval($n1);

    echo "<br>";

    echo "<br> O valor $n1 em moeda é R$ " . number_format($n1, 2, ",",".");



    ?>

</body>
</html>