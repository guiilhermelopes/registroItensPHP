<?php

require 'Conexao.php';
require 'model/CarroModel.php';

class Carro
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

        foreach ($q as $dados) {

            $carro = new CarroModel();
            $carro->codigo = $dados['codigo'];
            $carro->placa = $dados['placa'];
            $carro->renavam = $dados['renavam'];
            $carro->data_compra = $dados['data_compra'];
            $carro->marca = $dados['marca'];
            $carro->modelo = $dados['modelo'];
            $carro->cor = $dados['cor'];
            $carro->tipo = $dados['tipo'];
            $carro->ano_modelo = $dados['ano_modelo'];
            $carro->ano_fabricacao = $dados['ano_fabricacao'];

            $listaDeCarros[] = $carro;
        }
        return $listaDeCarros;
    }

    public function listar()
    {

        $sql = "select * from carro limit 90000";
        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $this->mapear($q);
    }

    public function inserir($carro)
    {

        $sql = "insert into carro (placa, renavam, data_compra, marca, modelo, cor, tipo, ano_modelo, ano_fabricacao) 
        values (:placa, :renavam, :data_compra, :marca, :modelo, :cor, :tipo, :ano_modelo, :ano_fabricacao)";

        $q = $this->conexao->prepare($sql);

        $q->bindParam(':placa', $carro->placa);
        $q->bindParam(':renavam', $carro->renavam);
        $q->bindParam(':data_compra', $carro->data_compra);
        $q->bindParam(':marca', $carro->marca);
        $q->bindParam(':modelo', $carro->modelo);
        $q->bindParam(':cor', $carro->cor);
        $q->bindParam(':tipo', $carro->tipo);
        $q->bindParam(':ano_modelo', $carro->ano_modelo);
        $q->bindParam(':ano_fabricacao', $carro->ano_fabricacao);


        $q->execute();
    }

    public function pesquisarPorCodigo($codigo, $limite = 10000)
    {
        $sql = "select * from carro where codigo = :codigo limit " . $limite;
        $q = $this->conexao->prepare($sql);

        $q->bindParam(':codigo', $codigo);

        $q->execute();
        return $this->mapear($q);
    }

    public function getCarro($codigo)
    {
        $carro = new CarroModel();

        $arrayCarro = $this->pesquisarPorCodigo($codigo, 1);
        if (count($arrayCarro) > 0) {
            $carro = $arrayCarro[0];
        }


        return $carro;
    }
    public function pesquisarPorPlaca($placa)
    {
        $sql = "select * from carro where placa like :placa limit 90000";
        $q = $this->conexao->prepare($sql);

        $placa = '%' . $placa . '%';

        $q->bindParam(':placa', $placa);

        $q->execute();
        return $this->mapear($q);
    }
    public function pesquisarPorRenavam($renavam)
    {
        $sql = "select * from carro where renavam like :renavam limit 90000";
        $q = $this->conexao->prepare($sql);

        $renavam = '%' . $renavam . '%';

        $q->bindParam(':renavam', $renavam);

        $q->execute();
        return $this->mapear($q);
    }
    public function pesquisarPorDataCompra($data_compra)
    {
        $sql = "select * from carro where data_compra like :data_compra limit 90000";
        $q = $this->conexao->prepare($sql);

        $data_compra = '%' . $data_compra . '%';

        $q->bindParam(':data_compra', $data_compra);

        $q->execute();
        return $this->mapear($q);
    }
    public function pesquisarPorMarca($marca)
    {
        $sql = "select * from carro where marca like :marca limit 90000";
        $q = $this->conexao->prepare($sql);

        $marca = '%' . $marca . '%';

        $q->bindParam(':marca', $marca);

        $q->execute();
        return $this->mapear($q);
    }
    public function pesquisarPorModelo($modelo)
    {
        $sql = "select * from carro where modelo like :modelo limit 90000";
        $q = $this->conexao->prepare($sql);

        $modelo = '%' . $modelo . '%';

        $q->bindParam(':modelo', $modelo);

        $q->execute();
        return $this->mapear($q);
    }
    public function pesquisarPorCor($cor)
    {
        $sql = "select * from carro where cor like :cor limit 90000";
        $q = $this->conexao->prepare($sql);

        $cor = '%' . $cor . '%';

        $q->bindParam(':cor', $cor);

        $q->execute();
        return $this->mapear($q);
    }
    public function pesquisarPorTipo($tipo)
    {
        $sql = "select * from carro where tipo like :tipo limit 90000";
        $q = $this->conexao->prepare($sql);

        $tipo = '%' . $tipo . '%';

        $q->bindParam(':tipo', $tipo);

        $q->execute();
        return $this->mapear($q);
    }
    public function pesquisarPorAnoModelo($ano_modelo)
    {
        $sql = "select * from carro where ano_modelo like :ano_modelo limit 90000";
        $q = $this->conexao->prepare($sql);

        $ano_modelo = '%' . $ano_modelo . '%';

        $q->bindParam(':ano_modelo', $ano_modelo);

        $q->execute();
        return $this->mapear($q);
    }
    public function pesquisarPorAnoFabricacao($ano_fabricacao)
    {
        $sql = "select * from carro where ano_fabricacao like :ano_fabricacao limit 90000";
        $q = $this->conexao->prepare($sql);

        $ano_fabricacao = '%' . $ano_fabricacao . '%';

        $q->bindParam(':ano_fabricacao', $ano_fabricacao);

        $q->execute();
        return $this->mapear($q);
    }

    public function eliminar($codigo)
    {
        $sql = "delete from carro where codigo = :codigo";

        $q = $this->conexao->prepare($sql);
        $q->bindParam(':codigo', $codigo);

        $q->execute();
    }

    public function atualizar($carro)
    {

        $sql = "update carro set placa= :placa, renavam = :renavam, data_compra = :data_compra, marca = :marca, modelo = :modelo, cor = :cor, tipo = :tipo, ano_modelo = :ano_modelo, ano_fabricacao = :ano_fabricacao where codigo = :codigo";
        $q = $this->conexao->prepare($sql);

        
        $q->bindParam(':placa', $carro->placa);
        $q->bindParam(':renavam', $carro->renavam);
        $q->bindParam(':data_compra', $carro->data_compra);
        $q->bindParam(':marca', $carro->marca);
        $q->bindParam(':modelo', $carro->modelo);
        $q->bindParam(':cor', $carro->cor);
        $q->bindParam(':tipo', $carro->tipo);
        $q->bindParam(':ano_modelo', $carro->ano_modelo);
        $q->bindParam(':ano_fabricacao', $carro->ano_fabricacao);
        $q->bindParam(':codigo', $carro->codigo);

        $q->execute();
    }

}

?>