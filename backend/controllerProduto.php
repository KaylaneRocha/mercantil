<?php

require "Produto.class.php";
$produto = new Produto();

if (isset($_POST['cadastrarProduto'])) {

    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : null;
    $descricao = (isset($_POST['descricao'])) ? $_POST['descricao'] : null;
    $quantidade = (isset($_POST['quantidade'])) ? $_POST['quantidade'] : null;
    $valor = (isset($_POST['valor'])) ? $_POST['valor'] : null;
    $produto->cadastrar($titulo, $descricao, $quantidade, $valor);
}




if (isset($_GET['listarProduto'])) {
    $dados = $produto->listar();

    foreach ($dados as $produto) {
        echo "
                <tr>
                    <td>" . $produto["titulo"] . "</td>
                    <td>" . $produto["descricao"] . "</td>
                    <td>" . $produto["quantidade"] . "</td>
                    <td>" . $produto["preco"] . "</td>
                    <td onclick='deletarProduto(" . $produto["id"] . ")'>Excluir</td>
                    <td onclick='consultarProduto(" . $produto["id"] . ")'>Editar</td>
                </tr>
            ";
    }
}


if (isset($_POST['deletarProduto'])) {
    $id = (isset($_POST['id'])) ? $_POST['id'] : null;

    $produto->deletar($id);
}

if (isset($_POST['editarProduto'])) {
    $id = (isset($_POST['id'])) ? $_POST['id'] : null;
    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : null;
    $descricao = (isset($_POST['descricao'])) ? $_POST['descricao'] : null;
    $quantidade = (isset($_POST['quantidade'])) ? $_POST['quantidade'] : null;
    $preco = (isset($_POST['preco'])) ? $_POST['preco'] : null;

    $produto->editar($id, $titulo, $descricao, $quantidade, $preco);
}

if (isset($_GET['consultarProduto'])) {
    $id = (isset($_GET['id'])) ? $_GET['id'] : null;

    $produto->consultar($id);
}
