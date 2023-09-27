//Objeto para salvar um cadastro
$("#btn-save").on("click",function(){
    var form_nome = $("#nome").val();
    var form_id = $("#id").val();
//teste no console
    console.log(form_nome + " -- " + form_id); 
//Encaminhando dados
    $.ajax({
        url:"criar.php",
        type:"post",
        data:{
            nome: form_nome, id: form_id
        },
        beforeSend : function(){
            $("#resposta").html("Enviando...");
        }
    }).done(function(r){
        $("#resposta").html("Enviado com sucesso!");
    })

})
//Objeto para atualizar um cadastro
$("#btn-atualizar").on("click",function(){
    var form_nome = $("#nome").val();
    var form_id = $("#id").val();
//teste no console
    console.log(form_nome + " -- " + form_id); 
//Encaminhando dados
    $.ajax({
        url:"atualizar.php",
        type:"post",
        data:{
            nome: form_nome, id: form_id
        },
        beforeSend : function(){
            $("#resposta").html("Atualizando...");
        }
    }).done(function(r){
        $("#resposta").html("Atualizado com sucesso!");
        window.location="listar.php"
    })

})

