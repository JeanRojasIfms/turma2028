<?php
 
 require '../config/configuracao.php'; 
 include '../dao/InfracaoDao.php';
 include '../model/Infracao.php';
 $btn = $_POST['btn'];
    $btn = $_POST['btn'];

    switch ($btn){
        case 'Enviar': inserir($mysql);
            break;
        case 'Remover': remover($mysql);
            break;
        case 'Atualizar': atualizar($mysql);
            break;
        case 'Cancelar': cancelar();
            break;   
    }
    function inserir($mysql) {
        $descricao = $_POST['descricao'];
        $pontos = $_POST['pontos'];
        $valor = $_POST['valor'];
        $inf = new Infracao(null,$descricao,$pontos,$valor);
        $dao = new InfracaoDao($mysql);
        $dao->inserir($inf);
        header('Location: ../views/listaInfracao.php');
    }

    function remover($mysql) {
        $id = $_POST['id'];
        $dao = new InfracaoDao($mysql);
        $dao->remover($id);
        header('Location: ../views/listaInfracao.php');

    }

    function atualizar($mysql){
        $id = $_POST['id'];
        $descricao = $_POST['descricao'];
        $pontos = $_POST['pontos'];
        $valor = $_POST['valor'];
        $i = new Infracao($id,$descricao,$pontos,$valor);

        $dao = new InfracaoDao($mysql);
        $dao->atualizar($i);
        header('Location: ../views/listaInfracao.php');
    }
    function cancelar(){
        header('Location: ../views/listaInfracao.php');
    }

    
?>