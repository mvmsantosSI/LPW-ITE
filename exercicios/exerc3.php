<?php
    echo "CARROS DISPONIVEIS: ";

    $veiculos = array(
        'Gol' => array(
            'carro' => 'bolinha',
            'km' => 30000,
            'estado' => 'SP',
        ),
        'Fiat' => array(
            'carro' => 'Uno',
            'km' => 200000,
            'estado' => 'RJ',
        ),
        'Volks' => array( 
            'carro' => 'Jetta',
            'km' => 10000,
            'estado' => 'AC',
        ),
        'Ford' => array(
            'carro' => 'KA',
            'km' => 56000,
            'estado' => 'RO',
        ),
        'Toyota' => array(
            'carro' => 'Corolla',
            'km' => 76000,
            'estado' => 'RO',
        )
    );
    echo $veiculos['Gol']['carro'];
    echo $veiculos['Gol']['km'];
?>

<form action="exerc.php" method="get">
    <hr>
    <span>Escreva o indice da marca do carro desejado: </span>
    <input type="text" name="txtNumero" id="" />
    <input type="submit" value="Enviar" />
</form>

<?php
    if ( isset($_GET['txtNumero'])) {
        for($i = 0; $i <= 10; $i++)
        {
            echo $_GET['txtNumero'] . 'x' . $i . " = ";
            echo $_GET['txtNumero'] * $i;
            echo "<br/>";
        }
    }
?>