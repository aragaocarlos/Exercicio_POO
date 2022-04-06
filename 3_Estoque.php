<?php

class Estoque{

    public $nome;
    public $qtdAtual;
    public $qtdMinima;

    public function mudarNome($nome){
        $this->nome = $nome;
    }

    public function mudarQtdMinima($qtdMinima){
        $this->qtdMinima = $qtdMinima;
    }

    public function repor($qtd){
        $this->qtdAtual += $qtd;
    }

    public function darBaixa($qtd){
        $this->qtdAtual -= $qtd;
    }

    public function mostrar(){
        echo "Produto: " . $this->nome . 
        "<br>Quantidade mínima: " . $this->qtdMinima .
        "<br>Quantidade atual: " . $this->qtdAtual;
    }

    public function precisaRepor(){
        if($this->qtdAtual <= $this->qtdMinima){
            return true;
        } else{
            return false;
        }
    }

}

?>