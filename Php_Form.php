<?php

$pessoa['nome'] = $_POST ['nome']; 
$pessoa['genero'] = $_POST ['genero']; 
$pessoa['data'] = $_POST ['data'];
$pessoa['telefone'] = $_POST ['telefone']; 
$pessoa['email'] = $_POST ['email']; 

$variavel = json_encode($pessoa);
$armazenamento = fopen(filename:"teste.txt", mode:'a');
fwrite($armazenamento, $variavel .PHP_EOL );

fclose($armazenamento);
?>