<?php 
    $local = '127.0.0.1:3306';
    $user = 'root';
    $pwd = '1234';
    $db = 'loja';

    $con = new mysqli($local, $user, $pwd, $db);

    if($con->connect_error){
        echo $con->connect_error;
    }
?>