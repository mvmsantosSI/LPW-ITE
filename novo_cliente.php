<?php include("layout/topo.php"); ?>

<h1>Adicionar novo cliente</h1>

<form method="post" action="salvar_cliente.php">
  <div class="form-group">
    <label>Nome do cliente</label>
    <input type="text" name="nome" class="form-control" placeholder="Marcos Santos">
  </div>

  <div class="form-group">
    <label>Data de nascimento</label>
    <input type="text" name="data_nascimento" class="form-control" placeholder="2001-07-05">
  </div>

  <div class="form-group">
    <label>Cidade de nascimento</label>
    <input type="text" name="cidade_nasc" class="form-control" placeholder="2">
  </div>

  <div class="form-group">
    <label>Cliente Ativo</label>
    <input type="text" name="ativo" class="form-control" placeholder="1">
  </div>

  <button type="submit" class="btn btn-success">Salvar</button>
</form>

<?php include("layout/baixo.php"); ?>