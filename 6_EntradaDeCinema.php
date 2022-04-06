<?php

class EntradaDeCinema{
    public $filme;
    public $data;
    public $horario;
    public $sala;
    public $valor;

    //Definir variáveis
    public function definir($filme, $data, $horario, $sala, $valor){
        $this->filme = $filme;
        $this->data = $data;
        $this->horario = $horario;
        $this->sala = $sala;
        $this->valor = $valor;
    }

    public function calculaDesconto(){
        if($this->horario < 16){
            $this->valor = $this->valor*0.9;
        }
    }

    public function imprimeIngresso(){
        echo "------------------Cine Nassau------------------" . 
        "<br>Filme: " . $this->filme . "<br>Data: " . $this->data . 
        "<br>Horário: " . $this->horario . "h<br>Sala: " . $this->sala . 
        "<br>Valor: " . $this->valor . "<br>---------------------------------------------------";
    }
}

?>