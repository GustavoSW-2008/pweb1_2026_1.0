<?php

    $pessoas = [
        ["nome" => "Gustavo", "idade" => 18],
        ["nome" => "Matheus", "idade" => 44],
        ["nome" => "Arthur", "idade" => 99],
    ];

foreach ($pessoas as $key => $item) {
    $nome = $item["nome"];
    $idade = $item["idade"];
    echo"indice: $key Nome: $nome Idade: $idade <br>";
}

