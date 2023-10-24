<?php 

class Caneta{

    public $modelo;
    public $cor;
    private $ponta;
    protected $estado;

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($p){
        

    }
    
    public function tampada(){
       if($this->estado){
        echo "Não consigo usar";
        echo "</br>";
       }else {
        echo "Eu consigo usar";
        echo "</br>";
       }
    }

    

    public function semTinta(){
        echo "Acabou a tinta. Preciso comprar uma outra Caneta";
        echo "</br>";
    }

}



?>