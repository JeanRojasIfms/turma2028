<?php
       require '../config/configuracao.php'; 
       include '../dao/MultaDao.php';
       
       include '../dao/InfracaoDao.php';
       
       include '../dao/CarroDao.php';
       include '../model/Multa.php';
       include '../model/Infracao.php';
       include '../model/Carro.php';
   

$btn = $_POST['btn'];

switch ($btn){
    case 'Inserir': inserir($mysql);
        break;
    case 'Cancelar': cancelar();
        break;
    case 'Remover': remover($mysql);    
        break;
    case 'Atualizar': atualizar($mysql);
        break;
}
function atualizar($mysql){
    $id = $_POST['id'];
    $cidade = $_POST['cidade'];
    $dataMulta = $_POST['dataMulta'];
    $horaMulta = $_POST['horaMulta'];
    $infracao = $_POST['descricao'];
    $carro = $_POST['nome'];
    $c = new Carro($carro,null,null,null,null,null);
    $i  = new Infracao($infracao,null,null,null);
    $m = new Multa($id,$cidade,$dataMulta,$horaMulta,$c,$i);
    $dao = new MultaDao($mysql);
    $dao->atualizar($m);
    header('Location: ../views/listaMulta.php');
}

function remover($mysql){
    $id = $_POST['id'];
    $dao = new MultaDao($mysql);
    $dao->remover($id);
    header('Location: ../views/listaMulta.php');
}
function cancelar(){
    header('Location: ../views/listaMulta.php');
}
function inserir($mysql){
    $id = $_POST['id'];
    $cidade = $_POST['cidade'];
    $dataMulta = $_POST['dataMulta'];
    $horaMulta = $_POST['horaMulta'];
    $infracao = $_POST['infracao'];
    $carro = $_POST['carro'];
    $i = new Infracao($infracao,null,null,null);
    $c = new Carro($carro,null,null,null,null,null);
    $multa = new Multa($id,$cidade,$dataMulta,$horaMulta, $c,$i);
    $dao = new MultaDao($mysql);
    $dao->inserir($multa);
    header('Location: ../views/listaMulta.php');
}




?>