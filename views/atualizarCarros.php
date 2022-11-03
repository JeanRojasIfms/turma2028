<?php
    require '../config/configuracao.php';
    include '../dao/CarroDao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
    
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <style>
        body{
    background-image: url("../img/linha.png");
}</style>
  <link rel="stylesheet" type="text/css" href="mudar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body >
    <?php
        include 'cabecalho.php';
    ?>

    <?php
        $id = $_GET['id'];
        $dao = new CarroDao($mysql);
        $car = $dao->buscarPorId($id);
     ?>

<form class="row g-2" method="POST" style="padding-block: 40px ;background-color:white;  margin-top: 70px; margin-left: 200px; margin-right:200px; border-style:outset; " action="../controller/controllerCarro.php">

<div class="col-md-8" style="margin-left:160px">
  <label >Placa </label>
  <input type="text" class="form-control" name="placa" value="<?=$car['placa']?>">
</div>



<div class="col-md-4" style="margin-left: 160px;" >
  <label  >Marca</label>
  <input type="text" class="form-control" name="marca" value="<?=$car['marca']?>">
</div>




<div class="col-md-4">
  <label > Modelo </label>
  <input type="text" class="form-control" name="modelo" value="<?=$car['modelo']?>">
</div>



<div class="col-md-4" style="margin-left: 160px;">
  <label > Cor </label>
  <input type="text" class="form-control" name="cor" value="<?=$car['cor']?>">
</div>


<div class="col-md-4">
  <label > Nome </label>
  <input type="text" class="form-control" name="nome" value="<?=$car['nome']?>">
</div>



<div class="d-grid gap-2 col-6 mx-auto" style="position: center ; margin-top: 20px; margin-bottom: 30px; ">
 
<input type="hidden" name="id" value="<?=$id?>">
  <button type="submit" class="btn  " style="background-color: rgb(53, 6, 54); color: white;" name="btn" value="Atualizar">Atualizar</button>
  <button type="submit" class="btn  " style="background-color: rgb(53, 6, 54); color: white;" name="btn" value="Cancelar">Cancelar</button>
  </div>
</form>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 
</body>
</html>