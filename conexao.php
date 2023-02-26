<?php

$hostname = "localhost";
$bancodedados = "entrevista";
$user = "root";
$password = "";

$mysqli = new mysqli($hostname, $user, $password, $bancodedados);
if ($mysqli->connect_errno){
    echo "Falha ao conectar:(" . $mysql->conect_errno . ")" . $mysqli->connect_error;
}
else{
    //echo "Conectado ao Banco de dados";
}

?>