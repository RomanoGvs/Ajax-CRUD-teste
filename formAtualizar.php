<html>
    <head></head>
    <body>
        <h1>Atualizar Cadastro</h1>
        <form method="POST">
        <?php 
            include 'conectar.php';
             
            $id = $_GET["id"];
            $sql = "SELECT * FROM task where id=\"$id\"";

            $exec = $pdo->query($sql);
            $registroAtt = $exec->fetch();
        ?>
            <input type="text" id="nome" name="nome" value="
            <?php
                echo $registroAtt["nome"]
            ?>
            "/>
            <br/>
            <input type="text" id="id" name="id" value="
            <?php
                echo $registroAtt["id"]
            ?>
            "/>
            <br/>
            <input type="button" id="btn-atualizar" value="Atualizar"/>
        </form>
        <div id="resposta"></div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="JavaScript/main.js"></script>
    </body>
</html>
