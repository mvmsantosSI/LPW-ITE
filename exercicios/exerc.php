<?php

if( isset($variavel))
{
    echo $variavel;
}else
{
    echo "Variavel não existe";
}

?>

<form action="exerc.php" method="get">
<span>Entre com o numero:</span>
<input type="text" name="txtNumero" id="" />
<input type="submit" value="Enviar" />
</form>

<?php
if ( isset($_GET['txtNumero'])) {
    for($i = 0; $i <= $_GET['txtNumero']; $i++)
    {
        echo $i . "<br/>";
    }
}
?>