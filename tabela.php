<?php

    $arquivo = file_get_contents('tabela2.csv');
    $array = explode(PHP_EOL, $arquivo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>
<body>
    <table border="1"> 
        <?php

        for ($i = 0; $i< count($array); $i++)
        {
            $linha = explode(';',$array[$i]);
            if($linha[0] != 'Nome' && isset($linha[1])){
                echo "<tr>";
                echo "<td>" . $linha[0] . "</td>";
                echo "<td>" . $linha[1] . "</td>";
                echo "<td>" . $linha[2] . "</td>";
                echo "<td>" . $linha[3] . "</td>";
                echo "<td>" . $linha[4] . "</td>";
                echo "<td>" . $linha[5] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>