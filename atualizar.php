<?php

require 'classes/bancoDeDados/Carro.php';

$titulo = 'Editar Veículo';
$acao = 'cadastrar.php';
$carro = new CarroModel();

if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];
    $titulo = 'Editar Veículo';
    $acao = 'editar.php';

    $c = new Carro();
    $carro = $c->getCarro($codigo);
}

?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Veículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <nav>
        <a class="navA" href="index.php">Listar Veículos</a>
    </nav>
    <div class="container">

        <form method="post" class="form mb-5" action="<?php echo $acao; ?>">
            <h2>
                <?php echo $titulo; ?>
            </h2>
            <div class="row">
                
                <div class="col-4 mb-3">
                    <label for="placa" class="form-label">Placa:</label><br>
                    <input value= "<?php echo $carro->placa; ?>"type="text" id="placa" name="placa" class="form-control">
                    <input type="hidden" value="<?php echo $carro->codigo; ?>" name= "codigo" id= "codigo">
                </div>
                <div class="col-4 mb-3">
                    <label for="renavam" class="form-label">Renavam:</label><br>
                    <input value= "<?php echo $carro->renavam; ?>" type="text" id="renavam" name="renavam" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="data_compra" class="form-label">Data da Compra:</label><br>
                    <input value= "<?php echo $carro->data_compra; ?>" type="date" id="data_compra" name="data_compra" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="marca" class="form-label">Marca:</label><br>
                    <input value= "<?php echo $carro->marca; ?>" type="text" id="marca" name="marca" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="modelo" class="form-label">Modelo:</label><br>
                    <input value= "<?php echo $carro->modelo; ?>" type="text" id="modelo" name="modelo" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="cor" class="form-label">Cor:</label><br>
                    <select name="cor" id="cor" class="form-select">
                        <option value="">(Selecione)</option>
                        <option value="1" <?php echo $carro->cor == '1' ? 'selected' : null; ?>>Amarelo</option>
                        <option value="2" <?php echo $carro->cor == '2' ? 'selected' : null; ?>>Azul</option>
                        <option value="3" <?php echo $carro->cor == '3' ? 'selected' : null; ?>>Bege</option>
                        <option value="4" <?php echo $carro->cor == '4' ? 'selected' : null; ?>>Branco</option>
                        <option value="5" <?php echo $carro->cor == '5' ? 'selected' : null; ?>>Cinza</option>
                        <option value="6" <?php echo $carro->cor == '6' ? 'selected' : null; ?>>Dourado</option>
                        <option value="7" <?php echo $carro->cor == '7' ? 'selected' : null; ?>>Grena</option>
                        <option value="8" <?php echo $carro->cor == '8' ? 'selected' : null; ?>>Laranja</option>
                        <option value="9" <?php echo $carro->cor == '9' ? 'selected' : null; ?>>Marrom</option>
                        <option value="10" <?php echo $carro->cor == '10' ? 'selected' : null; ?>>Prata</option>
                        <option value="11" <?php echo $carro->cor == '11' ? 'selected' : null; ?>>Preto</option>
                        <option value="12" <?php echo $carro->cor == '12' ? 'selected' : null; ?>>Rosa</option>
                        <option value="13" <?php echo $carro->cor == '13' ? 'selected' : null; ?>>Roxo</option>
                        <option value="14" <?php echo $carro->cor == '14' ? 'selected' : null; ?>>Verde</option>
                        <option value="15" <?php echo $carro->cor == '15' ? 'selected' : null; ?>>Vermelho</option>
                        <option value="16" <?php echo $carro->cor == '16' ? 'selected' : null; ?>>Fantasia</option>
                    </select>
                </div>
                <div class="col-4 mb-3">
                    <label for="tipo" class="form-label">Tipo:</label><br>
                    <select name="tipo" id="tipo" class="form-select">
                        <option selected value="">(Selecione)</option>
                        <option value="a" <?php echo $carro->tipo == 'a' ? 'selected' : null; ?>>Automotor</option>
                        <option value="e" <?php echo $carro->tipo == 'e' ? 'selected' : null; ?>>Elétrico</option>
                        <option value="p" <?php echo $carro->tipo == 'p' ? 'selected' : null; ?>>Propulsão Humana</option>
                        <option value="d" <?php echo $carro->tipo == 'd' ? 'selected' : null; ?>>De tração animal</option>
                        <option value="r" <?php echo $carro->tipo == 'r' ? 'selected' : null; ?>>Reboque</option>
                        <option value="s" <?php echo $carro->tipo == 's' ? 'selected' : null; ?>>Semirreboque</option>
                    </select>
                </div>
                <div class="col-4 mb-3">
                    <label for="ano_modelo" class="form-label">Ano do Modelo:</label><br>
                    <input value= "<?php echo $carro->ano_modelo; ?>" type="text" id="ano_modelo" name="ano_modelo" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="ano_fabricacao" class="form-label">Ano da Fabricação:</label><br>
                    <input value= "<?php echo $carro->ano_fabricacao; ?>" type="text" id="ano_fabricacao" name="ano_fabricacao" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col colBotao">
                    <button type="submit" class="btn btn-primary mt-4 p-2">Editar</button>
                </div>
            </div>

    </div>

    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>