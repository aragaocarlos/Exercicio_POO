<?php

include("5_Livro.php");

$livro1 = new Livro("102010", "PHP para Iniciantes", "120.98", "Fulano"); // usando construct

$livro1->exibirDados();

echo "<br><br>";

$livro1->setCodigo("232323");
$livro1->exibirDados();

echo "<br><br>";
echo $livro1->getAutor(); // exibe apenas o autor

?>