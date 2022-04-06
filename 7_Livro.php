<?php

include ("7_Publicacao.php");

class Livro extends Publicacao{
    private $isbn;
    private $qtdPaginas;

    public function getIsbn(){
        return $this->isbn;        
    }

    public function setIsbn($isbn){
        $this->isbn = $isbn;
    }

    public function getQtdPaginas(){
        return $this->qtdPaginas;
    }

    public function setQtdPaginas($qtdPaginas){
        $this->qtdPaginas = $qtdPaginas;
    }

    public  function __construct($isbn, $qtdPaginas){
        $this->isbn = $isbn;
        $this->qtdPaginas = $qtdPaginas;
    }
}

?>