<?php

require 'classes/bancoDeDados/Carro.php';

$c = new Carro();

$carros = [];

if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];
    $placa = $_GET['placa'];
    $renavam = $_GET['renavam'];
    $data_compra = $_GET['data_compra'];
    $marca = $_GET['marca'];
    $modelo = $_GET['modelo'];
    $cor = $_GET['cor'];
    $tipo = $_GET['tipo'];
    $ano_modelo = $_GET['ano_modelo'];
    $ano_fabricacao = $_GET['ano_fabricacao'];

} else {
    $codigo = '';
    $placa = '';
    $renavam = '';
    $data_compra = '';
    $marca = '';
    $modelo = '';
    $cor = '';
    $tipo = '';
    $ano_modelo = '';
    $ano_fabricacao = '';
}

if ($codigo != '') {
    $carros = $c->pesquisarPorCodigo($codigo);
} else if ($placa != '') {
    $carros = $c->pesquisarPorPlaca($nome);
} else if ($renavam != '') {
    $carros = $c->pesquisarPorRenavam($renavam);
} else if ($data_compra != '') {
    $carros = $c->pesquisarPorDataCompra($data_compra);
} else if ($marca != '') {
    $carros = $c->pesquisarPorMarca($marca);
} else if ($modelo != '') {
    $carros = $c->pesquisarPorModelo($modelo);
} else if ($cor != '') {
    $carros = $c->pesquisarPorCor($cor);
} else if ($tipo != '') {
    $carros = $c->pesquisarPorTipo($tipo);
} else if ($ano_modelo != '') {
    $carros = $c->pesquisarPorAnoModelo($ano_modelo);
} else if ($ano_fabricacao != '') {
    $carros = $c->pesquisarPorAnoFabricacao($ano_fabricacao);
} else {
    $carros = $c->listar();
}
?>


<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a class="navA" href="atualizar.php">Cadastrar Cliente</a>
    </nav>
    <h2>Buscar Carro</h2>
    <div class="container">
        <form type="submit" class="pb-3" action="index.php">
            <div class="row">
                <div class="col-2 mb-3">
                    <label for="codigo" class="form-label">Código:</label><br>
                    <input type="number" id="codigo" name="codigo" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="placa" class="form-label">Placa:</label><br>
                    <input type="text" id="placa" name="placa" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="renavam" class="form-label">Renavam:</label><br>
                    <input type="text" id="renavam" name="renavam" class="form-control">
                </div>
                <div class="col-2 mb-3">
                    <label for="data_compra" class="form-label">Data da Compra:</label><br>
                    <input type="date" id="data_compra" name="data_compra" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="marca" class="form-label">Marca:</label><br>
                    <input type="text" id="marca" name="marca" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="modelo" class="form-label">Modelo:</label><br>
                    <input type="text" id="modelo" name="modelo" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="cor" class="form-label">Cor:</label><br>
                    <select name="cor" id="cor" class="form-select">
                        <option value="">(Selecione)</option>
                        <option value="1">Amarelo</option>
                        <option value="2">Azul</option>
                        <option value="3">Bege</option>
                        <option value="4">Branco</option>
                        <option value="5">Cinza</option>
                        <option value="6">Dourado</option>
                        <option value="7">Grena</option>
                        <option value="8">Laranja</option>
                        <option value="9">Marrom</option>
                        <option value="10">Prata</option>
                        <option value="11">Preto</option>
                        <option value="12">Rosa</option>
                        <option value="13">Roxo</option>
                        <option value="14">Verde</option>
                        <option value="15">Vermelho</option>
                        <option value="16">Fantasia</option>
                    </select>
                </div>
                <div class="col-4 mb-3">
                    <label for="tipo" class="form-label">Tipo:</label><br>
                    <select name="tipo" id="tipo" class="form-select">
                        <option value="">(Selecione)</option>
                        <option value="a">Automotor</option>
                        <option value="e">Elétrico</option>
                        <option value="p">Propulsão Humana</option>
                        <option value="d">De tração animal</option>
                        <option value="r">Reboque</option>
                        <option value="s">Semirreboque</option>
                    </select>
                </div>
                <div class="col-4 mb-3">
                    <label for="ano_modelo" class="form-label">Ano do Modelo:</label><br>
                    <input type="text" id="ano_modelo" name="ano_modelo" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="ano_fabricacao" class="form-label">Ano da Fabricação:</label><br>
                    <input type="text" id="ano_fabricacao" name="ano_fabricacao" class="form-control">
                </div>
            </div>
                <div class="col colBotao">
                    <button type="submit" class="btn btn-primary mt-4 p-2">Pesquisar</button>
                </div>


        </form>
    </div>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Placa</th>
                <th>Renavam</th>
                <th>Data Compra</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Cor</th>
                <th>Tipo</th>
                <th>Ano do Modelo</th>
                <th>Ano da Fabricação</th>
                <th>Ações</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($carros as $carro) {

                ?>
                <tr>
                    <td>
                        <?php echo $carro->codigo; ?>
                    </td>
                    <td>
                        <?php echo $carro->placa; ?>
                    </td>
                    <td>
                        <?php echo $carro->renavam; ?>
                    </td>
                    <td>
                        <?php echo $carro->getDataCompraFormatado(); ?>
                    </td>
                    <td>
                        <?php echo $carro->marca; ?>
                    </td>
                    <td>
                        <?php echo $carro->modelo; ?>
                    </td>
                    <td>
                        <?php echo $carro->getCorFormatado(); ?>
                    </td>
                    <td>
                        <?php echo $carro->getTipoFormatado(); ?>
                    </td>
                    <td>
                        <?php echo $carro->ano_modelo; ?>
                    </td>
                    <td>
                        <?php echo $carro->ano_fabricacao; ?>
                    </td>
                    <td>
                        <a href="atualizar.php?codigo=<?php echo $carro->codigo; ?>">Editar</a>
                        <a href="deletar.php?codigoEliminar=<?php echo $carro->codigo; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>