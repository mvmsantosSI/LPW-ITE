<title>Cadastro de produtos</title>
<?php
    include("layout/topo.php");
    include("database.php"); //faz a conexão com o banco pelo arquivo database.php
    //require("database.php"); faz o mesmo que o include
    $sql = 'SELECT * FROM produto';

    $result = $con->query($sql);
?>

<h1>Cadastro de produtos</h1>

<a href="novo_produto.php" class="btn btn-info">Novo produto</a>

<br>
<br>
<table class="table table-hover table-dark">
    <thead>
        <td>Id</td>
        <td>Nome</td>
        <td>Preço</td>
        <td>Quantidade</td>
        <td>Peso</td>
    </thead>
    <tbody>
        <?php
            while($row = $result->fetch_assoc()) { //pode ser fetch_array
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['nome'] . "</td>
                        <td>" . $row['preço'] . "</td>
                        <td>" . $row['quantidade'] . "</td>
                        <td>" . $row['peso'] . "</td>
                        <td>
                            <a href='/Aula08/alterar_produto.php?id=" . $row['id'] . "'> ✏️ </a>
                            <a href='/Aula08/excluir_produto.php?id=" . $row['id'] . "'> 🗑️ </a>
                        </td>
                    </tr>
                ";
            }
        ?>
    </tbody>
</table>
<?php
    $con->close();
    include("layout/baixo.php");
?>