<?php

require 'classes/bancoDeDados/Carro.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        h2{
            text-align: center;
        }
        form{
            justify-content: center;
        }
    </style>
    </head>

<body>
    <h2>Cadastrar Carro</h2>
    <div class= "container">
        <form type="submit">
            <div class="row">
                <div class="col-4 mb-3">
                    <label for="placa" class="form-label">Placa:</label><br>
                    <input type="text" id= "placa" name= "placa" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="renavam" class="form-label">Renavam:</label><br>
                    <input type="text" id= "renavam" name= "renavam" class="form-control">
                </div>
                <div class="col-2 mb-3">
                    <label for="dataCompra" class="form-label">Data da Compra:</label><br>
                    <input type="date" id= "dataCompra" name= "dataCompra" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="marca" class="form-label">Marca:</label><br>
                    <input type="text" id= "marca" name= "marca" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="modelo" class="form-label">Modelo:</label><br>
                    <input type="text" id= "modelo" name= "modelo" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="cor" class="form-label">Modelo:</label><br>
                    <select name="cor" id="cor" class="form-select">
                        <option value="">(Selecione)</option>
                        <!-- COmpletar depois, ver detran cores -->
                    </select>
                </div>
                <div class="col-4 mb-3">
                    <label for="tipo" class="form-label">Tipo:</label><br>
                    <input type="text" id= "tipo" name= "tipo" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="anoModelo" class="form-label">Ano do Modelo:</label><br>
                    <input type="text" id= "anoModelo" name= "anoModelo" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="anoFabricacao" class="form-label">Ano da Fabricação:</label><br>
                    <input type="text" id= "anoFabricacao" name= "anoFabricacao" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class = "col-4">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>