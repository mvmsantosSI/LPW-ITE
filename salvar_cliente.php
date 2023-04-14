<title>Salvar cliente</title>
<?php
    include("database.php");

    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade_nasc = $_POST['cidade_nasc'];
    $ativo = $_POST['ativo'];


    $sql = "INSERT INTO cliente
            (nome, cidade_nasc, data_nascimento, ativo)
            VALUES
            ( '{$nome}', {$cidade_nasc}, '{$data_nascimento}', {$ativo} )";
    
    $con->query($sql); //executar o insert no banco
    $con->close(); //fechar conexão

    header("location: cliente.php");
?>