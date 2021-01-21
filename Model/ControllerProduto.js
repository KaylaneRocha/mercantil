listar();

/* ============================================================================ */


function listar() {
    var table = $('#table');

    table.text("Teste")

    var dados = {
        listarProdutos: 1
    }

    $.post("controller/ControllerProduto.php", dados, function (retorna) {
        table.html(retorna);
    });
}


/* ============================================================================ */

/**
 * Cadastro de Dados
 */

$('#confirmarCad').click(function () {

    var loadModal = $('#mensagem');
    var contentModal = $('#modal_alert');
    var titulo = $('#titulo').val();
    var descricao = $('#descricao').val();
    var quantidade = $('#quantidade').val();
    var preco = $('#preco').val();
    var link = $('#link').val();

    var dados = {
        cadastrarProduto: 1,
        titulo,
        descricao,
        quantidade,
        preco,
        link
    }

    validacao = 1;

    /* 
    array_check = [
        titulo,
        descricao,
        quantidade,
        preco,
        link
    ];

    $.each(array_check, function (keys, values) {
        if (values.length == 0) {
            validacao = 0;
            break;
        }
    }); */

    if (validacao) {
        $.post("controller/ControllerProduto.php", dados, function (retorna) {

            contentModal.text(retorna);
            $('#cadastro').modal('hide');
            loadModal.modal('show');
            setTimeout(function () {
                loadModal.modal('hide');
            }, 1500);
            $('#titulo').val("");
            $('#descricao').val("");
            $('#quantidade').val("");
            $('#preco').val("");
            listar();
            $("#mensagem").modal('hide');

        });
    } else {
        alert("Preencha todos os campos obrigatórios!!");
    }


});


/* ============================================================================ */

/**
 * Edição de Dados
 */

function consultarId(id) {

    var dados = {
        consultarProduto: 1,
        id: id
    }

    var loadModal = $('#editar');
    var id = $('#idEdit');
    var titulo = $('#tituloEdit');
    var descricao = $('#descricaoEdit');
    var quantidade = $('#quantidadeEdit');
    var preco = $('#precoEdit');
    var link = $('#linkEdit');

    $.post("controller/ControllerProduto.php", dados, function (retorno) {
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


$('#confirmarEdit').click(function () {

    var loadModal = $('#mensagem');
    var contentModal = $('#modal_alert');
    var id = $('#idEdit').val();
    var titulo = $('#tituloEdit').val();
    var descricao = $('#descricaoEdit').val();
    var quantidade = $('#quantidadeEdit').val();
    var preco = $('#precoEdit').val();
    var link = $('#linkEdit').val();

    var dados = {
        editarProduto: 1,
        id,
        titulo,
        descricao,
        quantidade,
        preco,
        link
    }

    $.post("controller/ControllerProduto.php", dados, function (retorno) {
        contentModal.html(retorno);
        loadModal.modal('show');
        setTimeout(function () {
            loadModal.modal('hide');
        }, 1500);
        listar();
    });
});


/* ============================================================================ */

/**
 * Exclusão de Dados
 */

function ConfirmarExc(id) {
    var pergunta = $("#pergunta");
    var loadModal = $('#deletar');

    $('#confirmarExc').val(id);
    pergunta.text("Deseja mesmo excluir este Produto? ");
    loadModal.modal('show');

}

$('#confirmarExc').click(function () {

    var id = $(this).val()
    var loadModal = $('#mensagem');
    var contentModal = $('#modal_alert');

    var dados = {
        deletarProduto: 1,
        id
    }

    $.post("controller/ControllerProduto.php", dados, function (retorno) {
        contentModal.text(retorno);
        loadModal.modal('show');
        setTimeout(function () {
            loadModal.modal('hide');
        }, 1500);
        listar();
    });
});


/* ============================================================================ */

/**
 * Visualização de Dados
 */

function visualizar(id) {
    var dados = {
        consultarProduto: 1,
        id: id
    }

    var loadModal = $('#visualizar');
    var id = $('#idView');
    var titulo = $('#tituloView');
    var descricao = $('#descricaoView');
    var quantidade = $('#quantidadeView');
    var preco = $('#precoView');
    var link = $('#imgView');

    $.post("controller/ControllerProduto.php", dados, function (retorno) {
        var dados = JSON.parse(retorno);
        id.val(dados.id);
        titulo.val(dados.titulo);
        descricao.val(dados.descricao);
        descricao.val(dados.descricao);
        quantidade.val(dados.quantidade);
        preco.val(dados.valor);

        if (dados.imglink == null || dados.imglink == "") {
            link.attr('src', 'images/error.jpeg');
        } else {
            link.attr('src', dados.imglink);
        }


        loadModal.modal('show');

    });
}

/* ============================================================================ */

/**
 * Filtrando Dados e mostrando na Tabela
 */

$('#filtrar').click(function () {

    var table = $('#table');
    var pesquisa = $('#pesquisa').val();
    var select = $('#select').val();

    var dados = {
        pesquisarProduto: 1,
        select,
        pesquisa
    }

    $.post("controller/ControllerProduto.php", dados, function (retorna) {
        table.html(retorna);
    });


});


/* ============================================================================ */


$('#pesquisa').keyup(function () {
    if ($(this).val() == null || $(this).val() == "") {
        listar();
    }
});