<?php
    require '../config/configuracao.php';
    include '../dao/InfracaoDao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infrações</title>
    
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <style>
    table {
  border-collapse: collapse;
  
  width: 70% !important;
  margin: auto;

  margin-top: 39px;
}

th, td {
  padding: 80px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: #ffccff;}

body{
    background-image: url("../img/linha.png");
}
    </style>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 </head>
<body>  
<?php 
    include 'cabecalho.php';
?>
 
<div class="panel panel-default" style="margin: 10px">
       
       <div class="panel-heading" style="text-align: center;">
           <div class="clearfix">
               <h2 class="panel-title aw-titulo-panel"  style="text-align: center; margin-top: 40px" >Listagem de Infrações</h2>                 
               <a class="btn " href="infracaoViews.php"  style="background-color: rgb(53, 6, 54); padding: 8px 60px; color: white; margin-top: 20px">Inserir</a>                  
           </div>
       </div>
           
       <div class="panel-body" style="margin-top: 20px;">   
           <table class="table table-hover">
           <thead>
               <tr>
               <th scope="col">Id</th>
               <th scope="col">Descricao</th>
               <th scope="col">Pontos</th>
               <th scope="col">Valor</th>
               
               <th scope="col">Botões</th>
               
               </tr>
           </thead>
           <tbody>         
   
           <?php
               $inf = new InfracaoDao($mysql);
               $result = $inf->buscarTodos();
               foreach($result as $i){
               ?>
                   <tr>
                       <th scope="row"><?=$i['idtb_infracao']?></th>
                       <td><?=$i['descricao']?></td>
                       <td><?=$i['pontos']?></td>
                       <td><?=$i['valor']?></td>
                       <td style="margin: auto;"><a href="atualizarInf.php?id=<?=$i['idtb_infracao']?>"class="btn" style="background-color: #cc80ff; ">Alterar</a> &nbsp;  <a href="deletarInfracao.php?id=<?=$i['idtb_infracao']?>" class="btn" style="background-color: #cccccc;">Remover</a></td>
                   </tr>       
               <?php
               }
               ?>          
   
           </tbody>
           </table>
       </div>
   </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script></body>

</html>