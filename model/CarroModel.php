<?php
class CarroModel
{

    public $codigo;
    public $placa;
    public $renavam;
    public $data_compra;
    public $marca;
    public $modelo;
    public $cor;
    public $tipo;
    public $ano_modelo;
    public $ano_fabricacao;

    public function getCorFormatado()
    {
        $corDescritiva = '';

        if ($this->cor == '1') {
            $corDescritiva = 'Amarelo';
        } else if ($this->cor == '2') {
            $corDescritiva = 'Azul';
        } else if ($this->cor == '3') {
            $corDescritiva = 'Bege';
        } else if ($this->cor == '4') {
            $corDescritiva = 'Branco';
        } else if ($this->cor == '5') {
            $corDescritiva = 'Cinza';
        } else if ($this->cor == '6') {
            $corDescritiva = 'Dourado';
        } else if ($this->cor == '7') {
            $corDescritiva = 'Grena';
        } else if ($this->cor == '8') {
            $corDescritiva = 'Laranja';
        } else if ($this->cor == '9') {
            $corDescritiva = 'Marrom';
        } else if ($this->cor == '10') {
            $corDescritiva = 'Prata';
        } else if ($this->cor == '11') {
            $corDescritiva = 'Preto';
        } else if ($this->cor == '12') {
            $corDescritiva = 'Rosa';
        } else if ($this->cor == '13') {
            $corDescritiva = 'Roxo';
        } else if ($this->cor == '14') {
            $corDescritiva = 'Verde';
        } else if ($this->cor == '15') {
            $corDescritiva = 'Vermelho';
        } else if ($this->cor == '16') {
            $corDescritiva = 'Fantasia';
        }

        return $corDescritiva;
    }

    public function getTipoFormatado()
    {
        $tipoDescritivo = '';
        if ($this->tipo == 'a') {
            $tipoDescritivo = 'Automotor';
        } else if ($this->tipo == 'e') {
            $tipoDescritivo = 'Elétrico';
        } else if ($this->tipo == 'p') {
            $tipoDescritivo = 'Propulsão Humana';
        } else if ($this->tipo == 'd') {
            $tipoDescritivo = 'De tração animal';
        } else if ($this->tipo == 'r') {
            $tipoDescritivo = 'Reboque';
        } else if ($this->tipo == 's') {
            $tipoDescritivo = 'Semirreboque';
        }

        return $tipoDescritivo;
    }

    public function getDataCompraFormatado()
    {

        $tempoDataCompra = strtotime($this->data_compra);
        $dataCompra = date('d/m/Y', $tempoDataCompra);

        return $dataCompra;
    }
}

?>