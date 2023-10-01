<?php

require 'classes/bancoDeDados/Carro.php';
$c = new Carro();
$carro = new CarroModel();

$carro->codigo = $_POST['codigo'];
$carro->placa = $_POST['placa'];
$carro->renavam = $_POST['renavam'];
$carro->data_compra = $_POST['data_compra'];
$carro->marca = $_POST['marca'];
$carro->modelo = $_POST['modelo'];
$carro->cor = $_POST['cor'];
$carro->tipo = $_POST['tipo'];
$carro->ano_modelo = $_POST['ano_modelo'];
$carro->ano_fabricacao = $_POST['ano_fabricacao'];

$c->inserir($carro);

header('Location: index.php');

?>