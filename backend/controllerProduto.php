<?php

    require "Produto.class.php";
    $produto = new Produto();

    if (isset($_POST['cadastrarProduto'])) {
<<<<<<< HEAD
        $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : null;
        $descricao = (isset($_POST['descricao'])) ? $_POST['descricao'] : null;
        $quantidade = (isset($_POST['quantidade'])) ? $_POST['quantidade'] : null;
        $preco = (isset($_POST['preco'])) ? $_POST['preco'] : null;
        $produto->cadastrar($titulo,$descricao,$quantidade,$preco);
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
                 <td onclick='deletarProduto(".$produto["id"].")'>Excluir</td>
                    <td onclick='consultarProduto(".$produto["id"].")'>Editar</td>
=======
        $nome = (isset($_POST['titulo'])) ? $_POST['titulo'] : null;
        $idade = (isset($_POST['descricao'])) ? $_POST['descricao'] : null;
        $idade = (isset($_POST['quantidade'])) ? $_POST['quantidade'] : null;

        $pessoa->cadastrar($titulo, $descricao,$quantidade);
    }

 /*   if (isset($_GET['listarPessoas'])) {
        $dados = $pessoa->listar();

        foreach ($dados as $pessoa) {
            echo "
                <tr>
                    <td>" . $pessoa["nome"] . "</td>
                    <td>" . $pessoa["idade"] . "</td>
                    <td onclick='deletarPessoa(".$pessoa["id"].")'>Excluir</td>
                    <td onclick='consultarPessoa(".$pessoa["id"].")'>Editar</td>
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16
                </tr>
            ";
        }
    }

<<<<<<< HEAD
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

        $produto->editar($id,$titulo,$descricao,$quantidade,$preco);
    }

    if (isset($_GET['consultarProduto'])) {
        $id = (isset($_GET['id'])) ? $_GET['id'] : null;

        $produto->consultar($id);
    }
=======
    if (isset($_POST['deletarPessoa'])) {
        $id = (isset($_POST['id'])) ? $_POST['id'] : null;

        $pessoa->deletar($id);
    }

    if (isset($_POST['editarPessoa'])) {
        $id = (isset($_POST['id'])) ? $_POST['id'] : null;
        $nome = (isset($_POST['nome'])) ? $_POST['nome'] : null;
        $idade = (isset($_POST['idade'])) ? $_POST['idade'] : null;

        $pessoa->editar($id, $nome, $idade);
    }

    if (isset($_GET['consultarPessoa'])) {
        $id = (isset($_GET['id'])) ? $_GET['id'] : null;

        $pessoa->consultar($id);
    }*/
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16
?>