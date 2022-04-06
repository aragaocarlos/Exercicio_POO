<?php

class Livro{
    private $codigo;
    private $titulo;
    private $valor;
    private $autor;

    public function __construct($codigo, $titulo, $valor, $autor)
    {
        $this->codigo = $codigo;
        $this->titulo = $titulo;
        $this->valor = $valor;
        $this->autor = $autor;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function exibirDados(){
        echo "Código: " . $this->codigo . "<br>Título: " .
        $this->titulo . "<br>Valor: " . $this->valor . 
        "<br>Autor: " . $this->autor;
    }


}

?>