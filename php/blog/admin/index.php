<?php

include_once './database/db.class.php';

$conn = new db("usuario ");

$dados = [
    'nome' => "Gustavo",
    'telefone' => "12345",
    'email' => "Gustavo@gmail.com",
];

$conn -> store($dados);
echo "Inserido com sucesso";
