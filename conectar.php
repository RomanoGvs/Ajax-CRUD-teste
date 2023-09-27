<?php
    $pdo = new PDO("mysql:host=localhost;dbname=ajax_crud","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
?>