<?php
    
    require '../config/configuracao.php'; 
    include '../dao/CarroDao.php';
    include '../model/Carro.php';
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
        $nome = $_POST['nome'];
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $cor = $_POST['cor'];
        $placa = $_POST['placa'];
        $car = new Carro(null,$nome,$modelo,$marca,$cor,$placa);
        $dao = new CarroDao($mysql);
        $dao->inserir($car);
        header('Location: ../views/listaCarro.php');
    }

    function remover($mysql) {
        $id = $_POST['id'];
        $dao = new CarroDao($mysql);
        $dao->remover($id);
        header('Location: ../views/listaCarro.php');

    }

    function atualizar($mysql){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $cor = $_POST['cor'];
        $placa = $_POST['placa'];
        $c = new Carro($id,$nome,$modelo,$marca,$cor,$placa);

        $dao = new CarroDao($mysql);
        $dao->atualizar($c);
        header('Location: ../views/listaCarro.php');
    }
    function cancelar(){
        header('Location: ../views/listaCarro.php');
    }

    
?>