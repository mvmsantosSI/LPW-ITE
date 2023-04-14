<title>Salvar produto</title>
<?php
    include("database.php");

    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preço = $_POST['preço'];
    $peso = $_POST['peso'];


    $sql = "INSERT INTO produto
            (nome, preço, quantidade, peso)
            VALUES
            ( '{$nome}', {$preço}, {$quantidade}, {$peso} )";
    
    $con->query($sql); //executar o insert no banco
    $con->close(); //fechar conexão

    header("location: index.php");
?>