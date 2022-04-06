<?php

class Contador{
    public $cont;

    public function zera(){
        $this->cont = 0;
    }

    public function incrementa(){
        $this->cont++;
    }

    public function retorna(){
        return $this->cont;
    }

}


?>