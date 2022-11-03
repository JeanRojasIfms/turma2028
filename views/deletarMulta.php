<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
    
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
    ?>
    <div style="margin-left: 400px; margin-right: 400px; padding-block: 50px;background-color:white; margin-top:200px; border-style:outset;" >
    <form method="POST" action="../controller/controllerMulta.php">
        <label style="position: center; margin-left: 100px;">Tem certeza que deseja remover?</label>
        <input type="hidden" name="id" value="<?=$id?>">
        
    <button type="submit" class="btn  " style="background-color: rgb(53, 6, 54); color: white;" name="btn" value="Cancelar">Cancelar</button>
    
    <button type="submit" class="btn  " style="background-color: rgb(53, 6, 54); color: white;" name="btn" value="Remover">Remover</button>

    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>