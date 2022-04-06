<?php

include("Agenda.php");

$agenda1 = new Agenda();
$agenda1->nome = "Luiz Carlos";
$agenda1->endereco = "Rua AAA, 1212";
$agenda1->telefone = "72727272";
$agenda1->email = "luiz10junior@gmail.com";

$agenda2 = new Agenda();
$agenda2->nome = "Isabella Pinagé";
$agenda2->endereco = "Rua BBB, 2323";
$agenda2->telefone = "58585858";
$agenda2->email = "isabellapinage@gmail.com";

echo "Nome: " . $agenda1->nome . "<br>Endereço: " . 
$agenda1->endereco . "<br>Telefone: " . $agenda1->telefone . 
"<br>Email: " . $agenda1->email . "<br><br>" .
"Nome: " . $agenda2->nome . "<br>Endereço: " . 
$agenda2->endereco . "<br>Telefone: " . $agenda2->telefone . 
"<br>Email: " . $agenda2->email;




?>