<?php

class Infracao{
    private $id;
    private $descricao;
    private $pontos;
    private $valor;

    function __construct($id,$descricao,$pontos,$valor)
    {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->pontos = $pontos;
        $this->valor = $valor;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function setPontos($pontos){
        $this->pontos = $pontos;
    }
    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getId(){
        return $this->id;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function getPontos(){
        return $this->pontos;
    }
    public function getValor(){
        return $this->valor;
    }
}