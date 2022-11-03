<?php
class MultaDao{
    private $mysql;

    function __construct($mysql)
    {
        $this->mysql = $mysql;
    }

    public function inserir($obj):void {
        $resultado = $this->mysql->prepare("insert into tb_multa (cidade,dataMulta,horaMulta,tb_carro_idtb_carro,tb_infracao_idtb_infracao) values (?,?,?,?,?)");
        $resultado->bind_param('sssss',$obj->getCidade(),$obj->getDataMulta(),$obj->getHoraMulta(),$obj->getCarro()->getId(),$obj->getInfracao()->getId());
        $resultado->execute();
    }

    public function remover(string $id):void{
        $resultado = $this->mysql->prepare("delete from tb_multa where idtb_multa = ?");
        $resultado->bind_param('s',$id);
        $resultado->execute();
    }

    public function atualizar($obj):void{
        $resultado = $this->mysql->prepare("update tb_multa set cidade=?,dataMulta=?,horaMulta=?,tb_carro_idtb_carro=?, tb_infracao_idtb_infracao=? where idtb_multa =?");
        $resultado->bind_param('ssssss',$obj->getCidade(),$obj->getDataMulta(),$obj->getHoraMulta(),$obj->getCarro()->getId(),$obj->getInfracao()->getId(),$obj->getId());
        $resultado->execute();

    }

    public function buscarPorId(string $id):array{
        $resultado = $this->mysql->prepare("select * from tb_multa where idtb_multa = ?");
        $resultado->bind_param('s',$id);
        $resultado->execute();
        return $resultado->get_result()->fetch_assoc();
    }

    public function buscarTodos():array{
        $resultado = $this->mysql->query("select * from tb_multa");
        return $resultado->fetch_all(MYSQLI_ASSOC);
        
    }




}