<?php 
        include("layout/topo.php");
        include("database/database.php");   
        $sql = '
        SELECT 
        *   
        FROM produtos';  
        $result = $con -> query($sql);  

    ?>
    <h1>Cadastro de Podutos</h1>
    <br>
    <br>
    <a href='novo_produto.php' class="btn btn-dark">Novo Produto</a>
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
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['nome']."</td>
                            <td>".$row['preco']."</td>
                            <td>".$row['quantidade']."</td>
                            <td>".$row['peso']."</td>
                            <td>
                                <a href='./alterar_produto.php?id=" . $row['id'] . "'> ✏️ </a>
                                <a href='./excluir_produto.php?id=" . $row['id'] . "'> 🗑️ </a>
                            </td>
                        </tr>";

                }

            ?>       

        </tbody>
    </table>    
    <?php 
        $con->close();
    ?>