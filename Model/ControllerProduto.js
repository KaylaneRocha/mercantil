
listar();

/* ============================================================================ */


function listar() {
    var table = $('.table');

    var dados = {
        listarProdutos: 1
    }

    $.post("../Controller/ControllerProduto.php", dados, function (retorna) {
        table.html(retorna);
    });
}


/* ============================================================================ */


$('#confirmarCad').click(function () {

    var loadModal = $('#staticBackdrop');
    var contentModal = $('#modal_alert');
    var titulo = $('#titulo').val();
    var descricao = $('#descricao').val();
    var quantidade = $('#quantidade').val();
    var preco = $('#preco').val();
    var link = $('#link').val();

    var dados = {
        cadastrarProduto: 1,
        titulo: titulo,
        descricao: descricao,
        quantidade: quantidade,
        preco: preco,
        link: link
    }

    $.post("../Controller/ControllerProduto.php", dados, function (retorna) {

        contentModal.text(retorna);
        loadModal.modal('show');
        $('#titulo').val("");
        $('#descricao').val("");
        $('#quantidade').val("");
        $('#preco').val("");
        listar();

    });

});


/* ============================================================================ */


function ConfirmarExc(id) {
    var pergunta = $("#pergunta");
    var loadModal = $('#staticBackdrop4');

    $('#confirmarExc').val(id);
    pergunta.text("Deseja mesmo excluir este Produto? ");
    loadModal.modal('show');

}


/* ============================================================================ */


$('#confirmarExc').click(function () {

    var id = $(this).val()
    var loadModal = $('#staticBackdrop');
    var contentModal = $('#modal_alert');

    var dados = {
        deletarProduto: 1,
        id: id
    }

    $.post("../Controller/ControllerProduto.php", dados, function (retorno) {
        contentModal.text(retorno);
        loadModal.modal('show');
        listar();
    });
});

/* ============================================================================ */


function consultarId(id) {

    var dados = {
        consultarProduto: 1,
        id: id
    }

    var loadModal = $('#staticBackdrop2');
    var id = $('#idEdit');
    var titulo = $('#tituloEdit');
    var descricao = $('#descricaoEdit');
    var quantidade = $('#quantidadeEdit');
    var preco = $('#precoEdit');
    var link = $('#linkEdit');

    $.post("../Controller/ControllerProduto.php", dados, function (retorno) {
        var dados = JSON.parse(retorno);
        id.val(dados.id);
        titulo.val(dados.titulo);
        descricao.val(dados.descricao);
        descricao.val(dados.descricao);
        quantidade.val(dados.quantidade);
        preco.val(dados.valor);
        link.val(dados.imglink);
        loadModal.modal('show');

    });

}


/* ============================================================================ */


$('#confirmarEdit').click(function () {

    var loadModal = $('#staticBackdrop');
    var contentModal = $('#modal_alert');
    var id = $('#idEdit').val();
    var titulo = $('#tituloEdit').val();
    var descricao = $('#descricaoEdit').val();
    var quantidade = $('#quantidadeEdit').val();
    var preco = $('#precoEdit').val();
    var link = $('#linkEdit').val();

    var dados = {
        editarProduto: 1,
        id: id,
        titulo: titulo,
        descricao: descricao,
        quantidade: quantidade,
        preco: preco,
        link: link
    }

    $.post("../Controller/ControllerProduto.php", dados, function (retorno) {
        contentModal.html(retorno);
        loadModal.modal('show');
        listar();
    });
});

/* ============================================================================ */


function visualizar(id) {
    var dados = {
        consultarProduto: 1,
        id: id
    }

    var loadModal = $('#staticBackdrop5');
    var id = $('#idView');
    var titulo = $('#tituloView');
    var descricao = $('#descricaoView');
    var quantidade = $('#quantidadeView');
    var preco = $('#precoView');
    var link = $('#imgView');

    $.post("../Controller/ControllerProduto.php", dados, function (retorno) {
        var dados = JSON.parse(retorno);
        id.val(dados.id);
        titulo.val(dados.titulo);
        descricao.val(dados.descricao);
        descricao.val(dados.descricao);
        quantidade.val(dados.quantidade);
        preco.val(dados.valor);

        if (dados.imglink == null || dados.imglink == "") {
            link.attr('src', 'images/error.png');
        } else {
            link.attr('src', dados.imglink);
        }
        
        
        loadModal.modal('show');

    });
}

/* ============================================================================ */


$('#pesquisa').keyup(function () {

    var table = $('#table');
    var pesquisa = $(this).val();

    var dados = {
        buscarProduto: 1,
        pesquisa: pesquisa
    }

    $.post("../Controller/ControllerProduto.php", dados, function (retorna) {
        table.html(retorna);
    });
});


/* ============================================================================ */


$('#selecione').change(function () {

    var selecao = $(this).val();
    var table = $('#table');
    var pesquisa = $('#pesquisa').val();

    if (selecao == 'sel') {
        listar();
    } else {

        var dados = {
            pesquisarProduto: 1,
            selecao: selecao,
            pesquisa: pesquisa
        }

        $.post("../Controller/ControllerProduto.php", dados, function (retorna) {
            table.html(retorna);
        });

    }
});


/* ============================================================================ */