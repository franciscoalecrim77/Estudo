<?php

interface Controlador{
    public function ligar();
    Public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
    
    }


class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;

    function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    function getVolume(){
        return $this->volume;
    }
    function setVolume($v){
        $this->volume = $v;
    }

    function getLigado(){
        return $this->ligado;
    }
    function setLigado($l){
        $this->ligado = $l;
    }

    function getTocando(){
        return $this->tocando;
    }
    function setTocando($t){
        $this->tocando = $t;
    }
    
    public function ligar(){
        $this->setLigado(true);

    }
    Public function desligar(){
        $this->setligado(false);
    }
    public function abrirMenu(){
        
         echo "<br> Está ligado: " . ($this->getLigado() ? "Sim" : "Não");
         echo "<br> Está tocando: " . ($this->getTocando() ? "Sim" : "Não");
         echo "<br> Voluma está em: " . ($this->getVolume());
         for ($i=0; $i <= $this->getVolume() ; $i+=10) { 
            echo "|";
         }
         echo "<br>";
    }
    public function fecharMenu(){
        echo "Fechando menu";

    }
    public function maisVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }

    }
    public function ligarMudo(){
        if($this->getVolume() >= 0 ){
            $this->setVolume(0);
        }

    }
    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(50);
        }
    }
    public function play(){
        if($this->getLigado() && !$this->getTocando()){
            $this->setTocando(true);
        }

    }
    public function pause(){
        if($this->getLigado() && $this->getTocando() == true){
            $this->setTocando(false);
        }
    }

}

$controle = new ControleRemoto;
// $controle->setVolume(60);
$controle->ligar();
// $controle->maisVolume(1);
$controle->play();
$controle->abrirMenu();  
echo "<pre>";
print_r($controle);


?>