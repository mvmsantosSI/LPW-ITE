<?php include("layout/topo.php"); ?>

<h1>Adicionar novo produto</h1>

<form method="post" action="salvar_produto.php">
  <div class="form-group">
    <label>Nome do produto</label>
    <input type="text" name="nome" class="form-control" placeholder="Calça Jeans">
  </div>

  <div class="form-group">
    <label>Preço</label>
    <input type="text" name="preço" class="form-control" placeholder="50.89">
  </div>

  <div class="form-group">
    <label>Quantidade de estoque</label>
    <input type="text" name="quantidade" class="form-control" placeholder="10">
  </div>

  <div class="form-group">
    <label>Peso em kg</label>
    <input type="text" name="peso" class="form-control" placeholder="0.8">
  </div>

  <button type="submit" class="btn btn-success">Salvar</button>
</form>

<?php include("layout/baixo.php"); ?>