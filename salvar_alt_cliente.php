<?php
    $id = $_POST['id'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade_nasc = $_POST['cidade_nasc'];
    $ativo = $_POST['ativo'];
    $nome = $_POST['nome'];

    $sql = "
    UPDATE cliente
        SET data_nascimento='{$data_nascimento}',
            cidade_nasc = {$cidade_nasc},
            nome = '{$nome}',
            ativo = {$ativo}
    WHERE id= {$id}
    ";
    echo $sql;

    include("database.php");
    $con->query($sql);

    header("location: cliente.php");
?>