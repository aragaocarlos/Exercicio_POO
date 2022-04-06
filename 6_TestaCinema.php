<?php

include("6_EntradaDeCinema.php");

$ingresso1 = new EntradaDeCinema(); //cria objeto
$ingresso1->definir("O pistoleiro sem dedo", "10/03/2014", 15, 5, 18.53);
$ingresso1->calculaDesconto();
$ingresso1->imprimeIngresso();

?>