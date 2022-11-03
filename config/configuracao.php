<?php
    $mysql = new mysqli('us-cdbr-east-06.cleardb.net','b98f7a13b4d42b','828cf788','heroku_8843d2e39002498');
    $mysql->set_charset('utf8');
    if ($mysql == false)
        echo "Falha na conexão do bd!";

?>