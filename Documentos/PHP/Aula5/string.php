<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de Texto</title>
</head>
<body>

<h1>Funções de Texto</h1>

<?php

$texto = "Instituto-da-Oportunidade-Social";
$textoc = str_replace("-", " ", $texto);
// (1: localizar, 2: substituir, 3: elemento para substituir)
$nome = "nathalia domingues freitas";

echo $textoc;
echo "<br> Texto corrigido: " . str_replace("-", " ", $texto);

echo "<br> Quantidade de Caracteres: " . strlen($texto);
// strlen(): visualizar a quantidade de caracteres

echo "<br> Quantidade de Palavras: " . str_word_count($textoc);
// str_word_count(): visualizar a quantidade de palavras

echo "<br> Texto em Minúsculo: " . strtolower($textoc);
// strtolower(): transforma o texto em minúsculo

echo "<br> Texto em Maiúsculo: " . strtoupper($textoc);
// strtoupper(): transforma o texto em mainúsculo

echo "<br> Exemplo: " . ucfirst($nome);
// ucfirst(): primeira letra de uma frase/texto fica maiúscula

echo "<br> Exemplo: " . ucwords($nome);
// ucwords(): primera letra de cada palavra fica maiúscula

echo "<br> Exemplo: " . strpos($textoc, "Social");
// strpos(1: texto, 2: o que irá localizar): localiza um paramêtro dentro da string

echo "<br> Exemplo: " . strrev($nome);
// strrev(): inverte a palavra/texto

echo "<br> Exemplo: " . substr($textoc, 20);
// substr(1: texto, 2: número): corta texto

echo "<br> Exemplo: " . str_repeat("Nathalia", 10);
// str_repeat(1: texto/palavra, 2: quanto deve repetir)

echo "<br> Exemplo: " . strrev(strtoupper($textoc));
// é possível colocar uma variação dentro de outra

echo "<br> Exemplo: " . substr_count($textoc, "t");
// substr_count(1: texto, 2: palavra): conta a quantidade que a palavra aparece

?>
    
</body>
</html>