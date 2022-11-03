<?php
    $mysql = new mysqli('localhost','root','','carro');
    $mysql->set_charset('utf8');
    if ($mysql == false)
        echo "Falha na conexão do bd!";

?>