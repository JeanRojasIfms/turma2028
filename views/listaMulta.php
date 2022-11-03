<?php
    require '../config/configuracao.php';
    include '../dao/MultaDao.php';
    include '../dao/CarroDao.php';
    include '../dao/InfracaoDao.php';
    include '../model/Multa.php';
    include '../model/Carro.php';
    include '../model/Infracao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multas</title>
    
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <style>
    table {
  border-collapse: collapse;
  
  width: 70% !important;
  margin: auto;

  margin-top: 39px;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: #ffccff;}
body{
    background-image: url("../img/linha.png");
}   </style>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 </head>
<body>
<?php 
    include 'cabecalho.php';
?>

<div class="panel panel-default" style="margin: 10px">
       
    <div class="panel-heading" style="text-align: center;">
        <div class="clearfix">
            <h2 class="panel-title aw-titulo-panel" style="text-align: center; margin-top: 40px">Multas</h2>                 
            <a class="btn " href="multaViews.php"  style="background-color: rgb(53, 6, 54); padding: 8px 60px; color: white; margin-top: 20px">Inserir</a>    
                                         
        </div>
    </div>
        
    <div class="panel-body" style="margin-top: 20px;">   
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Cidade</th>
            <th scope="col">Data Multa</th>
            <th scope="col">Hora Multa</th>
            <th scope="col">Carro</th>
            <th scope="col">Descricao</th>
            
            <th scope="col">Botões</th>
            </tr>
        </thead>
        <tbody>         

        <?php
            $multa = new MultaDao($mysql);
            $result = $multa->buscarTodos();
            foreach($result as $m){
            ?>

<?php
                        $daoC =  new CarroDao($mysql);
                        $c = $daoC->buscarPorId($m['tb_carro_idtb_carro']);

                        $daoI=  new InfracaoDao($mysql);
                        $i = $daoI->buscarPorId($m['tb_infracao_idtb_infracao']);

                    ?>

                <tr>
                    <th scope="row"><?=$m['idtb_multa']?></th>
                    <td><?=$m['cidade']?></td>
                    <td><?=$m['dataMulta']?></td>
                    <td><?=$m['horaMulta']?></td>

                   
                    <td><?=$c['nome']?></td>
                    <td><?=$i['descricao']?></td>

                    <td><a href="atualizarMulta.php?id=<?=$m['idtb_multa']?>" class="btn" style="background-color: #cc80ff; ">Alterar</a> &nbsp;  <a href="deletarMulta.php?id=<?=$m['idtb_multa']?>" class="btn" style="background-color: #cccccc;">Remover</a></td>
                </tr>       
            <?php
            }
            ?>          

        </tbody>
        </table>
    </div>
</div>

<script src="path/to/particles.min.js"></script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html>
