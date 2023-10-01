<?php

require 'Conexao.php';
require 'model/CarroModel.php';

class Cliente
{

    private $conexao;

    public function __construct()
    {
        $con = new Conexao();
        $this->conexao = $con->getConexao();
    }

    private function mapear($q)
    {
        $listaDeCarros = [];

        foreach($q as $dados){

            $carro = new CarroModel();
            $carro->codigo = $dados['codigo'];
            $carro->placa = $dados['placa'];
            $carro->renavam = $dados['renavam'];
            $carro->dataCompra = $dados['dataCompra'];
            $carro->marca = $dados['marca'];
            $carro->modelo = $dados['modelo'];
            $carro->cor = $dados['cor'];
            $carro->tipo = $dados['tipo'];
            $carro->anoModelo = $dados['anoModelo'];
            $carro->anoFabricacao = $dados['anoFabricacao'];
            
            $listaDeCarros [] = $carro;
        }
        return $listaDeCarros;
    }

    

}

?>