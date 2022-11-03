<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Infracao</title>
    
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <style>
        body{
    background-image: url("../img/linha.png");
}</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
<?php 
    include 'cabecalho.php';
?>
    <form class="row g-2" method="POST" style="padding-block: 40px ;  background-color:white; margin-top: 70px; margin-left: 200px; margin-right:200px; border-style:outset; " action="../controller/controllerInfracao.php">


<div class="col-md-8" style="margin:auto">
  <label style="margin-top: 30px" >Descricao</label>
  <input type="text" class="form-control" name="descricao" >
</div>



<div class="col-md-4" style="margin-left:160px">
  <label >Pontos</label>
  <input type="text" class="form-control" name="pontos">
</div>



<div class="col-md-4">
  <label > Valor </label>
  <input type="text" class="form-control" name="valor" >
</div>


<div class="d-grid gap-2 col-6 mx-auto" style="position: center ; margin-top: 20px; margin-bottom: 30px; ">
  <input type="hidden" name="id" value="<?=$id?>">
  <button type="submit" class="btn  " style="background-color: rgb(53, 6, 54); color: white;" name="btn" value="Enviar">Enviar</button>
  <button type="submit" class="btn  " style="background-color: rgb(53, 6, 54); color: white;" name="btn" value="Cancelar">Cancelar</button>
  </div>
</form>


















       

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script></body>

</html>
