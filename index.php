<?php

    $arquivo = file_get_contents('arquivo.csv'); 

    $array = explode(PHP_EOL, $arquivo);
    
    var_dump(print_r($array, true)); 

    for ($i = 0; $i< count($array); $i++)
    {
        $linha = explode(';',$array[$i]);
        echo print_r($linha, true);
        echo "<br>";

  
        if($linha[0] != 'Nome' && isset($linha[1])){

            echo "Meu nome é " . $linha[0];
            echo " meu telefone é " . $linha[1];
            echo " tenho a idade de " . $linha[2];
            echo " e moro no estado de " . $linha[3];
            echo "<br>";
       }
    }
?>