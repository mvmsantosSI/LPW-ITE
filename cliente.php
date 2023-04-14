<?php
    include("layout/topo.php");
    include("database.php"); //faz a conexão com o banco pelo arquivo database.php
    //require("database.php"); faz o mesmo que o include
    $sql = 'SELECT * FROM cliente';

    $result = $con->query($sql);
?>

<title>Página de cliente</title>

<h1>Cadastro de clientes</h1>

<a href="novo_cliente.php" class="btn btn-info">Novo cliente</a>

<br>
<br>
<table class="table table-hover table-dark">
    <thead>
        <td>Id</td>
        <td>Nome</td>
        <td>Data de nascimento</td>
        <td>Cidade de nascimento</td>
        <td>Ativo</td>
    </thead>
    <tbody>
        <?php
            while($row = $result->fetch_assoc()) { //pode ser fetch_array
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['nome'] . "</td>
                        <td>" . $row['data_nascimento'] . "</td>
                        <td>" . $row['cidade_nasc'] . "</td>
                        <td>" . $row['ativo'] . "</td>
                        <td>
                            <a href='./alterar_cliente.php?id=" . $row['id'] . "'> ✏️ </a>
                            <a href='./excluir_cliente.php?id=" . $row['id'] . "'> 🗑️ </a>
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