<?php

class Conexao
{
    public function getConexao()
    {
        $host = 'localhost'; //Host
        $port = 3306; //Porta que conecta ao Banco
        $dbName = 'carros_crud'; //Nome do Banco

        $usuario = 'root'; //Usuário(Padrão)
        $senha = ''; //Senha(Padrão)

        //Conexão com o banco de dados
        $con = new PDO
        (
            "mysql:host=" . $host . ";port=" . $port . ";dbname=" . $dbName . "",
            $usuario,
            $senha
        );

        return $con;
    }
}

?>