<?php
    include("../conexao.php");

    //verificar se o ID foi fornecido
    if (!isset($_GET['id'])){
        die("ID do usuário não foi fornecido");
    }

    //vai receber o ID da URL
    $id = $_GET['id'];

    $sql = "DELETE FROM usuario WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":id", $id);
    $stmt->execute();

    header("Location: TelaListagem.php");
    exit;

?>