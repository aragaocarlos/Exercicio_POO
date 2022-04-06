<?php

include("1_Produto.php");

$produto1 = new Produto(); // cria objeto

$produto1->nome = 'Monitor LDC 15"';
$produto1->quantEstoque = 150;
$produto1->valorVenda = 230.50;

echo    "Produto: " . $produto1->nome .
        "<br>Estoque: " . $produto1->quantEstoque .
        "<br>Valor: " . $produto1->valorVenda . "<br><br>";

$produto2 = new Produto();

$produto2->nome = "Mouse Óptico";
$produto2->quantEstoque = 25;
$produto2->valorVenda = 35.68;

echo    "Produto: " . $produto2->nome .
        "<br>Estoque: " . $produto2->quantEstoque . 
        "<br>Valor: " . $produto2->valorVenda;


?>