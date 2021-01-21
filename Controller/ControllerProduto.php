<?php

require "Produto.class.php";

$produto = new Produto();

/** ========================================================================== */
if (isset($_POST['listarProdutos'])) {

    $dados = $produto->listar();
    $count = count($dados);

    if ($count) {
        foreach ($dados as $produto) {
            echo "  
                        <tr>
                            <td>" . $produto['titulo'] . "</td>
                            <td>" . $produto['descricao'] . "</td>
                            <td>" . $produto['quantidade'] . "</td>
                            <td>" . $produto['valor'] . "</td>
                            <td>
                                <div class='table-data-feature'>
                                    <button class='item' data-toggle='tooltip' data-placement='top' title='Edit' onclick='consultarId(" . $produto['id'] . ")'>
                                        <i class='zmdi zmdi-edit'></i>
                                    </button>
    
                                    <button class='item' data-toggle='tooltip' data-placement='top' title='Delete' onclick='ConfirmarExc(" . $produto['id'] . ")'>
                                        <i class='zmdi zmdi-delete'></i>
                                    </button>
    
                                    <button class='item' data-toggle='tooltip' data-placement='top' title='More' onclick='visualizar(" . $produto['id'] . ")'>
                                        <i class='fa fa-eye'></i>
                                    </button>
                                </div>
                            </td>
                        </tr>";
        }
    } else {
        echo "<br><h5>Nenhum dado encontrado</h5>";
    }
}

/** ========================================================================== */
if (isset($_POST['cadastrarProduto'])) {

    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : null;
    $descricao = (isset($_POST['descricao'])) ? $_POST['descricao'] : null;
    $quantidade = (isset($_POST['quantidade'])) ? $_POST['quantidade'] : null;
    $preco = (isset($_POST['preco'])) ? $_POST['preco'] : null;
    $link = (isset($_POST['link'])) ? $_POST['link'] : null;

    $produto->cadastrar($titulo, $descricao, $quantidade, $preco, $link);
}

/** ========================================================================== */
if (isset($_POST['deletarProduto'])) {
    $id = (isset($_POST['id'])) ? $_POST['id'] : null;

    $produto->deletar($id);
}

/** ========================================================================== */
if (isset($_POST['consultarProduto'])) {

    $id = (isset($_POST['id'])) ? $_POST['id'] : null;

    $produto->consultar($id);
}

/** ========================================================================== */
if (isset($_POST['editarProduto'])) {

    $id = (isset($_POST['id'])) ? $_POST['id'] : null;
    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : null;
    $descricao = (isset($_POST['descricao'])) ? $_POST['descricao'] : null;
    $quantidade = (isset($_POST['quantidade'])) ? $_POST['quantidade'] : null;
    $preco = (isset($_POST['preco'])) ? $_POST['preco'] : null;
    $link = (isset($_POST['link'])) ? $_POST['link'] : null;

    $produto->editar($id, $titulo, $descricao, $quantidade, $preco, $link);
}

/** ========================================================================== */
if (isset($_POST['buscarProduto'])) {

    $pesquisa = (isset($_POST['pesquisa'])) ? $_POST['pesquisa'] : null;

    $dados = $produto->buscar($pesquisa);

    $count = count($dados);

    if ($count) {
        foreach ($dados as $produto) {
            echo "  
            <tr>
                <td>" . $produto['titulo'] . "</td>
                <td>" . $produto['descricao'] . "</td>
                <td>" . $produto['quantidade'] . "</td>
                <td>" . $produto['valor'] . "</td>
                <td>
                    <div class='table-data-feature'>
                        <button class='item' data-toggle='tooltip' data-placement='top' title='Edit' onclick='consultarId(" . $produto['id'] . ")'>
                            <i class='zmdi zmdi-edit'></i>
                        </button>
    
                        <button class='item' data-toggle='tooltip' data-placement='top' title='Delete' onclick='ConfirmarExc(" . $produto['id'] . ")'>
                            <i class='zmdi zmdi-delete'></i>
                        </button>
    
                        <button class='item' data-toggle='tooltip' data-placement='top' title='More' onclick='visualizar(" . $produto['id'] . ")'>
                            <i class='fa fa-eye'></i>
                        </button>
                    </div>
                </td>
            </tr>";
        }
    } else {
        echo "<cente><br><h4> Nenhum dado encontrado</h4><cente>";
    }

    
}


/** ========================================================================== */

if (isset($_POST['pesquisarProduto'])) {

    $pesquisa = (isset($_POST['pesquisa'])) ? $_POST['pesquisa'] : null;
    $sel = (isset($_POST['select'])) ? $_POST['select'] : null;


    $dados = $produto->pesquisar($sel, $pesquisa);
    $count = count($dados);

    if ($count) {
        foreach ($dados as $produto) {
            echo "  
                <tr>
                    <td>" . $produto['titulo'] . "</td>
                    <td>" . $produto['descricao'] . "</td>
                    <td>" . $produto['quantidade'] . "</td>
                    <td>" . $produto['valor'] . "</td>
                    <td>
                        <div class='table-data-feature'>
                            <button class='item' data-toggle='tooltip' data-placement='top' title='Edit' onclick='consultarId(" . $produto['id'] . ")'>
                                <i class='zmdi zmdi-edit'></i>
                            </button>
    
                            <button class='item' data-toggle='tooltip' data-placement='top' title='Delete' onclick='ConfirmarExc(" . $produto['id'] . ")'>
                                <i class='zmdi zmdi-delete'></i>
                            </button>
    
                            <button class='item' data-toggle='tooltip' data-placement='top' title='More' onclick='visualizar(" . $produto['id'] . ")'>
                                <i class='fa fa-eye'></i>
                            </button>
                        </div>
                    </td>
                </tr>";
        }
    } else {
        echo "<cente><br><h4> Nenhum dado encontrado</h4><cente>";
    }
    
}
