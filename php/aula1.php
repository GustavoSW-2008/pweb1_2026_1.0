<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"Ola mundo!";
    $idade=20;
    if($idade < 18){
        echo"Menor";
    } else {
        echo"Maior" ;
    }

    $notas = [5,7,10,9];
    //print_n
    echo"<br>";
    for($i=0; $i < count($notas);$i++) {
        echo $notas[$I] . "<br>";
    }

    foreach($notas as $item) {
        echo"$item" . "<br>";
    }

    $carro = ['modelo' => "Mustang", 'cor' => "Branco", "ano"=> 2026];
    echo $carro['modelo'] . " . " . $carro['cor']

    ?>
</body>
</html>