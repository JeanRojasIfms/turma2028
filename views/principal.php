<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
  <link rel="stylesheet" type="text/css" href="stilopo.css">
  
    <title>Principal</title>
    
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
 
     img{
          height: auto;
          margin: auto;
 }
body{
    background-image: url("../img/linha.png");}
   
 </style>
  </head>
  <body  >
   <?php 
    include 'cabecalho.php';
    ?>
    
<h4  >Sistema Gerenciador de Carros </h4>
<p>No Brasil, as infrações de trânsito são penalizadas de duas formas, de acordo com sua gravidade:
     multa e pontuação na CNH (Carteira Nacional de Habilitação) ou Permissão Para Dirigir (PPD). 
     O sistema de multas funciona a partir de uma caracterização que as infrações recebem no CTB 
     (Código de Trânsito Brasileiro), e elas podem se encaixar em quatro categorias: leve, média, grave, 
     gravíssima.</p>

     <div id="div1" style="margin-top: -250px; 
    display: inline-block; margin-left: 50px; margin-top: 30px">
     <h5>Sistema de Multas</h5>
<p style="margin-left: -50px">Um sistema de tabelas <br> com objetivo de ajudar <br> na inserção e remoção <br> de multas</p>
               
<a type="button" class="btn" href="listaMulta.php" style="background-color: rgb(53, 6, 54); padding: 8px 60px; color: white; border-radius: 2px;">Lista Multas</a>
 </div>

<div id="div2" style="margin-top: -250px;display: inline-block;margin: auto;margin-left: 50px;">

<h5  >Sistema de Carros</h5>
<p style="margin-left: -50px">Um sistema de tabelas <br> com objetivo de ajudar <br> na inserção e remoção <br> de carros.</p>
               
<a type="button" class="btn" href="listaCarro.php" style="background-color: rgb(53, 6, 54); padding: 8px 60px; color: white; border-radius: 2px;">Lista Carros</a>
 </div>

<div id="div3" style="margin-top: -250px;display: inline-block;margin: auto;margin-left: 50px;">

<h5>Sistema de Infrações</h5>
<p style="margin-left: -50px">Um sistema de tabelas <br> com objetivo de ajudar <br> na inserção e remoção <br> de infrações.</p>
               
<a type="button" class="btn" href="listaInfracao.php" style="background-color: rgb(53, 6, 54); padding: 8px 60px; color: white; border-radius: 2px;">Lista Infrações</a>
 
</div>
     <div id="div4" style="margin-top: -420px;">
     <img style=" position: absolute; right: 0;  "src="../img/carro.gif">

</div>

  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script></body>

</html>