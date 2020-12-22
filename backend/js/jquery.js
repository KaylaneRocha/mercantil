$("#enviar").click(function() {
    var titulo = $("#titulo").val();
    var descricao = $("#descricao").val();
    var quantidade = $("#quantidade").val();


    // alert("Nome: "+nome+"\nIdade: "+idade);

    var dados = {
        cadastrarPessoa: 1,
        titulo: titulo,
        descricao: descricao,
        quantidade: quantidade
    }

    $.post("backend/controllerPessoa.php", dados,function (retorna) {
        alert(retorna);
        listar();
    });    

});