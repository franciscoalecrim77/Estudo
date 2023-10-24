<?php

class Caneta{

    public $modelo;
    public $cor;
    public $uso;
    private $ponta;
    private $carga;
    public $estado;

    public function __construct($m, $p, $u, $c, $carga){
        $this->cor = $c;
        $this->modelo = $m;
        $this->ponta = $p;
        $this->uso = $u;
        $this->carga = $carga;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }

    public function getCarga(){
        return $this->carga;
    }
    public function setCarga($c){
        $this->carga = $c;
    }
}


$c1 = new Caneta("bic", 0.5, true, 'Azul', '90%');
// $c1->setModelo("bic");
// $c1->setPonta(0.5);
// $c1->setCarga("89%");
echo "<pre>";
var_dump($c1);

echo "Eu tenho uma caneta {$c1->getModelo()}, ela tem a ponta {$c1->getPonta()} e a sua carga atual é {$c1->getCarga()}" // aqui eu posso interpolar as informações.

?>