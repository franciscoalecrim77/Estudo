<?php


class Lutador{

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($no){
        $this->nome = $no;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function setNacionalidade($na){
        $this->nacionalidade = $na;
    }

    public function getIdade(){
        return $this->idade;
    }

    Public function setIdade($id){
        $this->idade = $id;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($al){
        $this->altura = $al;
    }
    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($pe){
        $this->peso = $pe;

        $this->getCategoria();

    }
    public function getCategoria(){
        return $this->categoria;
    }

    public function setCategoria($ca){
        if($this->getPeso() <= 52.2){
            $this->setCategoria("Peso minimo não atingido.");
            
        }else if($this->getPeso() <= 70.3){
            $this->setCategoria("Peso Leve.");
        }else if($this->getPeso() <= 83.9){
            $this->setCategoria("Peso Médio.");
        }else if($this->getPeso() <= 120){
            $this->setCategoria("Peso Pesado.");
        }else{
            $this->setCategoria("Categoria Inválida");
        }
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function setVitorias($vi){
        $this->vitorias = $vi;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    public function setDerrotas($de){
        $this->derrotas = $de;
    }

    public function getEmpates(){
        return $this->empates;
    }

    public function setEmpates($em){
        $this->empates = $em;
    }
   
    public function __construct(){
        $this->nome;

    }

    public function apresentar(){
        echo "Lutador: " . $this->getNome();
        echo "Nacionalidade: " . $this->getNacionalidade();
        echo $this->getIdade() . " Anos";
        echo $this->getAltura() . "m de altura";
        echo "Pesando: " . $this->getPeso();
        echo "Ganhou: " . $this->getVitorias();
        echo "Perdeu: " . $this->getDerrotas();
        echo "Empatou: " . $this->getEmpates();
    }
    
    public function status(){
        echo $this->getNome();
        echo "É um " . $this->getCategoria();
        echo $this->getVitorias() . "Vitórias";
        echo $this->getDerrotas() . "Derrotas";
        echo $this->getEmpates() . "Empates";

    }
    
    public function ganharLuta(){   
        $this->setVitorias($this->getVitorias() + 1);

    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);

    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);

    }

}