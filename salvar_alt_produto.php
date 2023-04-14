<?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $peso = $_POST['peso'];
    $preço = $_POST['preço'];

    $sql = "
    UPDATE produto
        SET nome='{$nome}',
            quantidade = {$quantidade},
            preço = {$preço},
            peso = {$peso}
    WHERE id= {$id}
    ";
    echo $sql;

    include("database.php");
    $con->query($sql);

    header("location: index.php");
?>