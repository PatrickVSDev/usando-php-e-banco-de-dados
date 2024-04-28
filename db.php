<?php

$con = new mysqli('localhost', 'root', '', 'aulaphp');
if($con->connect_errno){
    die("Erro na conexão: " . $con->connect_error);
}

?>