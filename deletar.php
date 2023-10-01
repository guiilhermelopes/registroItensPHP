<?php 
require 'classes/bancoDeDados/Carro.php';
$c = new Carro();

$codigoEliminar = $_GET['codigoEliminar'];

$c->eliminar($codigoEliminar);

header('Location: index.php');

?>
