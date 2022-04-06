<?php

class Publicacao{
    private $nome;
    private $autor;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function __construct($nome, $autor){
        $this->nome = $nome;
        $this->autor = $autor;
    }
}

?>