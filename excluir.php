<?php 
    include 'conectar.php';

    $id = $_GET["id"];

    $sql = "DELETE FROM task WHERE id=\"$id\" ";
    $exec = $pdo->query($sql);

    header("location: listar.php");
?>