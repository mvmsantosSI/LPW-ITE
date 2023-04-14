<?php include("layout/topo.php"); 

  $id = $_GET["id"];

  $sql = "SELECT * FROM cliente WHERE id=" . $id;
  
  include("database.php");

  $resultado = $con->query($sql);
  $dados = $resultado->fetch_assoc();
  //var_dump($dados);
?>

<h1>Alteração de cliente</h1>

<form method="post" action="salvar_alt_cliente.php">
  <input type="hidden"
          name="id"
          value="<?php echo $dados['id']; ?>"
  >
  
  <div class="form-group">
    <label>Nome do cliente</label>
    <input type="text" 
          name="nome" 
          class="form-control" 
          placeholder=""
          value="<?php echo $dados['nome']; ?>"
    >
  </div>

  <div class="form-group">
    <label>Data de Nascimento</label>
    <input type="text" 
          name="data_nascimento" 
          class="form-control" 
          placeholder=""
          value="<?php echo $dados['data_nascimento']; ?>"
    >
  </div>

  <div class="form-group">
    <label>Cidade de Nascimento</label>
    <input type="text" 
          name="cidade_nasc" 
          class="form-control" 
          placeholder=""
          value="<?php echo $dados['cidade_nasc']; ?>"      
    >
  </div>

  <div class="form-group">
    <label>Cliente Ativo</label>
    <input type="text" 
          name="ativo" 
          class="form-control" 
          placeholder=""
          value="<?php echo $dados['ativo']; ?>"
    >
  </div>

  <button type="submit" class="btn btn-success">Salvar</button>
</form>

<?php include("layout/baixo.php"); ?>