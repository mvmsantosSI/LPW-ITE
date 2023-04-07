<?php include("layout/topo.php"); ?>   
    <form method="post" action="salvar_produto.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Nome do Produto</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite o nome do produto">            
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Quantidade</label>
        <input type="text" name="quantidade" class="form-control" placeholder="Digite a quantidade do produto">            
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Preço</label>
        <input type="text" name="preco" class="form-control" placeholder="Digite o preço do produto">            
    </div>
    <div class="form-group">
            <label for="exampleInputEmail1">Peso</label>
            <input type="text" name="peso" class="form-control" placeholder="Digite o peso do produto">            
        </div>       
        <button type="submit" class="btn btn-outline-dark btn-lg btn-block">Cadastrar</button>
        </form>
<?php include("layout/baixo.php");