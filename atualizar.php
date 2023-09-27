<?php
    include 'conectar.php';

    $nome = $_POST["nome"];
    $id = $_POST["id"];

    $sql = "UPDATE task SET nome=\"$nome\", id=\"$id\" WHERE id=$id";
    $exec = $pdo->query($sql)
?>