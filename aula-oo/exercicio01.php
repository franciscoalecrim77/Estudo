<?php

class ContaBanco{
    //atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;


    //Métodos

    public function __construct(){
        $saldo = 0;
        $status = false;
    }

    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($nc){
        $this->numConta = $nc;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($t){
        $this->tipo = $t;
    }

    public function getDono(){
        return $this->dono;
    }

    public function setDono($d){
        $this->dono = $d;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }

    public function abrirConta(){
        if($this->tipo == 'cc'){
            $this->setSaldo(50);
        }

        if($this->tipo == 'cp'){
            $this->setSaldo(100);
        }
        $this->status = true;
    }

    public function fecharConta(){
        if($this->getSaldo() == 0 ){
            $this->status = false;
        }else{
            echo"A conta Bancária tem um valor de {$this->getSaldo()}. É necessario não ter nenhum valor presente na conta para realizar o seu fechamento.";
        }


    }
    
    public function depositar($depositar){
        $this->setSaldo($depositar + $this->getSaldo());
        

    }

    public function sacar($sacar){
        if($this->getSaldo() > 0){
        $this->setSaldo($this->getSaldo() - $sacar);

        }

    }
    
    public function pagarMensal(){
        if ($this->tipo == 'cc'){
        $this->setSaldo($this->saldo - 12.5);
    }
    if($this->tipo == 'cp'){

        $this->setSaldo($this->saldo - 20);
    }
    

    }
}

$conta1 = new ContaBanco();
$conta1->numConta = 123;
$conta1->setDono("João");
$conta1->setTipo("cc");
$conta1->abrirConta();
$conta1->getSaldo();
$conta1->pagarMensal();
// $conta1->sacar(60);
// $conta1->depositar(13);
$conta1->fecharConta();

echo "<pre>";
print_r($conta1);

phpinfo();