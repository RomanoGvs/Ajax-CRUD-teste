<html>
    <head></head>
    <body>
        <h1>Cadastrar</h1>
        <form method="POST">
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome"/>
            <br/>
            <input type="text" id="id" name="id" placeholder="Digite seu id"/>
            <br/>
            <input type="button" id="btn-save" value="Salvar"/>
        </form>
        <div id="resposta"></div>

        <button>
            <a href="listar.php">
                Ver lista
            </a>
        </button>
        <!--Adicionando Jquery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="JavaScript/main.js"></script>
    </body>
</html>
