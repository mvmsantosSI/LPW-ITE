<?php 

    /*$local = '127.0.0.1:3307';
    $user = 'root';
    $pwd = '';
    $db = 'loja';

    $con = new mysqli($local, $user, $pwd, $db);

    if($con->connect_error){
        echo $con->connect_error;
    }*/

    include("database/database.php");
    
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $peso = $_POST['peso'];

    $sql = "INSERT INTO produtos
            (nome,peso, preco, quantidade)
            VALUES 
            ('{$nome}',{$peso},{$preco},{$quantidade})";
    
    $con->query($sql);
    $con->close(); 

?>
 
<script>
    window.location = 'index.php';
</script>