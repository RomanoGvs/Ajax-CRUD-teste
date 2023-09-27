<html>
    <h1>Listar Cadastros</h1>
        <?php 
        include 'conectar.php';

        $sql = "SELECT * FROM task";
        $exec = $pdo->query($sql);
        //Criar vetores na tela
        while($registro = $exec->fetch()){
            echo $registro["id"] . " - " . $registro["nome"] . "<br/>";
            echo "[<a href=formAtualizar.php?id=$registro[id]>Atualizar</a>]";
            echo "[<a href=excluir.php?id=$registro[id]>Excluir</a>]";
            echo "<hr />";
        }
        ?>
    <button>
        <a href="index.php">Cadastrar</a>
    </button>
</html>