<?php include("layout/topo.php"); 

    $id = $_GET['id'];

    $sql = "SELECT * FROM produtos WHERE id=" . $id;

    include("database/database.php");

    $resultado = $con->query($sql);
    $dados = $resultado->fetch_assoc();
?>

    <h1>Alteração de produto</h1>

    <form method="post" action="salvar_alt_produto.php">
        <input 
            type="hidden" 
            name="id"
            value="<?php echo $dados['id']; ?>">

    <div class="form-group">
        <label for="exampleInputEmail1">Nome do Produto</label>
        <input type="text" 
                name="nome" 
                class="form-control" 
                placeholder="Digite o nome do produto"
                value="<?php echo $dados['nome']; ?>"
                >            
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Quantidade</label>
        <input type="text" 
                name="quantidade" 
                class="form-control" 
                placeholder="Digite a quantidade do produto"
                value="<?php echo $dados['quantidade']; ?>"
                >            
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Preço</label>
        <input type="text" 
                name="preco" 
                class="form-control" 
                placeholder="Digite o preço do produto"
                value="<?php echo $dados['preco']; ?>"
                >            
    </div>
    <div class="form-group">
            <label for="exampleInputEmail1">Peso</label>
            <input 
                type="text" 
                name="peso" 
                class="form-control" 
                placeholder="Digite o peso do produto"
                value="<?php echo $dados['peso']; ?>"
                >            
        </div>       
        <button type="submit" class="btn btn-outline-dark btn-lg btn-block">Cadastrar</button>
        </form>
<?php include("layout/baixo.php");