listar();

function listar() {
    var table = $("#produto");

    var dados = {
        listarProduto: 1,
    }

    $.get("backend/controllerProduto.php", dados, function (retorna) {
        table.html(retorna);
    });    
}



$("#cadastrar").click(function() {

    var titulo = $("#titulo").val();
    var descricao = $("#descricao").val();
    var quantidade = $("#quantidade").val();
    var valor = $("#valor").val();

    var dados = {
        cadastrarProduto: 1,
        titulo: titulo,
        descricao: descricao,
        quantidade: quantidade,
        valor: valor
    }

    $.post("backend/controllerProduto.php", dados, function (retorna) {
        alert(retorna);
        listar();
    });    

});



function deletarProduto(id) {
    var dados = {
        deletarProduto : 1,
        id : id
    }

    $.post("backend/controllerProduto.php", dados, function (retorna) {
        alert(retorna);
        listar();
    });    
}



function consultarProduto(id) {
    var dados = {
        consultarProduto : 1,
        id : id
    }

    $.get("backend/controllerProduto.php", dados, function (retorna) {
        var dados = JSON.parse(retorna);

        $("#editar_id").val(dados.id);
        $("#editar_titulo").val(dados.titulo);
        $("#editar_descricao").val(dados.descricao);
        $("#editar_quantidade").val(dados.quantidade);
        $("#editar_preco").val(dados.preco);
        $("#editar_produto").show("fast");
    });
}



$("#editar_enviar").click(function() {
    var id = $("#editar_id").val();
    var titulo = $("#editar_titulo").val();
    var descricao = $("#editar_descricao").val();
    var quantidade = $("#editar_quantidade").val();
    var preco = $("#editar_preco").val();

    var dados = {
        editarProduto: 1,
        id: id,
        titulo: titulo,
        descricao: descricao,
        quantidade: quantidade,
        preco: preco
    }


    $.post("backend/controllerProduto.php", dados,function (retorna) {
        alert(retorna);
        $("#editar_produto").fadeOut("slow");
        listar();
    });    

});