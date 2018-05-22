<?php 
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'GET'){
    if(!isset($_GET['preco'])){
        echo 'Não foi possivel calcular, envie o preco por get. ?preco=3300'; die();
    }
    $valor = $_GET['preco'] + 1.65;
    echo 'O valor do carro é: '. $valor; 
}   
?>