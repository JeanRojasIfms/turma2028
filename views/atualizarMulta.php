<?php
    require '../config/configuracao.php';
    include '../dao/MultaDao.php';
    include '../dao/CarroDao.php';
    include '../dao/InfracaoDao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Gerenciador de Multas</title>
    
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

    <?php
        $id = $_GET['id'];
        $dao = new MultaDao($mysql);
        $multa = $dao->buscarPorId($id);
    ?>

<?php
       
        $daoC = new CarroDao($mysql);
        $carro = $daoC->buscarPorId($multa['tb_carro_idtb_carro']);
    ?>

<?php
        $daoI = new InfracaoDao($mysql);
        $infracao = $daoI->buscarPorId($multa['tb_infracao_idtb_infracao']);
    ?>
    
    
    
    <form class="row g-2" method="POST" style="padding-block: 40px ;background-color:white;margin-top: 70px; margin-left: 200px; margin-right:200px; border-style:outset; " action="../controller/controllerMulta.php">


<div class="col-md-8" style="margin:auto">
  <label style="margin-top: 30px" >Cidade</label>
  <input type="text" class="form-control" name="cidade" value="<?=$multa['cidade']?>">
</div>



<div class="col-md-4" style="margin-left:160px">
  <label >Data Multa</label>
  <input type="text" class="form-control" name="dataMulta"value="<?=$multa['dataMulta']?>">
</div>



<div class="col-md-4; col-md-4">
  <label > Hora Multa </label>
  <input type="text" class="form-control" name="horaMulta" value="<?=$multa['horaMulta']?>">
</div>





<select class="form-select w-50 p-2 h-50 d-inline-block" style=" margin-left: 120px ;margin-top: 30px"aria-label="Default select example" name="descricao">
<?php
            $daoI = new InfracaoDao($mysql);
            $infracao = $daoI->buscarTodos();
            foreach($infracao as $obj){

                if ($infracao['tb_infracao_idtb_infracao'] == $obj['idtb_infracao']){
            ?>
                <option value="<?=$obj['idtb_infracao']?>" selected><?=$obj['descricao']?></option>
            <?php
                }
                else {
            ?>
                <option value="<?=$obj['idtb_infracao']?>"><?=$obj['descricao']?></option>

            
        <?php
                }
            }
        ?>
</select>



<select class="form-select w-25 p-2 h-50 d-inline-block" style="margin-left:20px; margin-top: 30px"aria-label="Default select example" name="nome">
<?php
            $daoC = new CarroDao($mysql);
            $carro = $daoC->buscarTodos();
            foreach($carro as $obj){

                if ($carro['tb_carro_idtb_carro'] == $obj['idtb_carro']){
            ?>
                <option value="<?=$obj['idtb_carro']?>" selected><?=$obj['nome']?></option>
            <?php
                }
                else {
            ?>
                <option value="<?=$obj['idtb_carro']?>"><?=$obj['nome']?></option>

            
        <?php
                }
            }
        ?>
</select>


<div class="d-grid gap-2 col-6 mx-auto" style="position: center ; margin-top: 20px; margin-bottom: 30px; ">
  <input type="hidden" name="id" value="<?=$id?>">
  <button type="submit" class="btn" style="background-color: rgb(53, 6, 54); color: white;" name="btn" value="Atualizar">Atualizar</button>
  <button type="submit" class="btn" style="background-color: rgb(53, 6, 54); color: white;" name="btn" value="Cancelar">Cancelar</button>
  </div>
</form>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>