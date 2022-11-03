<?php
class Carro{
    private $id;
    private $nome;
    private $modelo;
    private $marca;
    private $cor;
    private $placa;

    function __construct($id,$nome,$modelo,$marca,$cor,$placa)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->cor = $cor;
        $this->placa = $placa;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    public function setPlaca($placa){
        $this->placa = $placa;
    }

    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getModelo(){
        return $this->modelo;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getCor(){
        return $this->cor;
    }

    public function getPlaca(){
        return $this->placa;
    }

}
