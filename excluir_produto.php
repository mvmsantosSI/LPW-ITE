<?php

  $id = $_GET["id"];

  $sql = "DELETE FROM produto WHERE id={$id}";
  
  include("database.php");
  $con->query($sql);

  header("location: index.php");
?>