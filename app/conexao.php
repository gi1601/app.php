<?php

    //conecar com o banco usando PDO
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "app";
    $dsn = "mysql:host=$host;dbname=$banco;";

    try{
        $conn = new PDO($dsn, $usuario, $senha);
    } catch(\PDOException $e) {
        throw new PDOException($e->getMessage());
    }

?>