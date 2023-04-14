<?php

  $id = $_GET["id"];

  $sql = "DELETE FROM cliente WHERE id={$id}";
  
  include("database.php");
  $con->query($sql);

  header("location: cliente.php");
?>