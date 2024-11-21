<?php

if($_SERVER['HTTP_HOST'] === 'localhost:8000'){
    include 'superDefault.php';
}else{
    $servername = getenv('nombreServer');
    $username = getenv('usuarioServer');
    $password = getenv('contraServer');
    $dbname = getenv('nombreDB');
}

?>
