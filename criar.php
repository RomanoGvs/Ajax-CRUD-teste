<?php
    include 'conectar.php';

    $nome = $_POST["nome"];
    $id = $_POST["id"];

    $sql = "INSERT INTO task (`nome`,`id`)value(\"$nome\",\"$id\")";
    $exec = $pdo->query($sql)
?>