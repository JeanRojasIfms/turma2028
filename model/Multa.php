<?php
class Multa{
    private $id;
    private $cidade;
    private $dataMulta;
    private $horaMulta;
    private $carro;
    private $infracao;

    function __construct($id,$cidade,$dataMulta,$horaMulta,$carro,$infracao)
    {
        $this->id = $id;
        $this->cidade = $cidade;
        $this->dataMulta = $dataMulta;
        $this->horaMulta = $horaMulta;
        $this->carro = $carro;
        $this->infracao = $infracao;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function setDataMulta($dataMulta){
        $this->dataMulta = $dataMulta;
    }
    public function setHoraMulta($horaMulta){
        $this->horaMulta = $horaMulta;
    }

    public function setCarro($carro){
        $this->carro = $carro;
    }

    public function setInfracao($infracao){
        $this->infracao = $infracao;
    }

    public function getId(){
        return $this->id;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getDataMulta(){
        return $this->dataMulta;
    }
    public function getHoraMulta(){
        return $this->horaMulta;
    }
    public function getCarro(){
        return $this->carro;
    }
    public function getInfracao(){
        return $this->infracao;
    }
}