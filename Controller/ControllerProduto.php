<?php

require "Produto.class.php";

$produto = new Produto();

/** ========================================================================== */
if (isset($_POST['listarProdutos'])) {

    $dados = $produto->listar();

    echo "<thead> 
            <tr>
                <th>TÍTULO</th>
                <th>DESCRIÇÃO</th>
                <th>QUANTIDADE</th>
                <th>PREÇO</th>
                <th>AÇÕES</th>
            </tr>
        </thead>";

    foreach ($dados as $produto) {
        echo "  
                <tbody>
                    <tr>
                        <td>" . $produto['titulo'] . "</td>
                        <td>" . $produto['descricao'] . "</td>
                        <td>" . $produto['quantidade'] . "</td>
                        <td>" . $produto['valor'] . "</td>
                        <td>
                        <button type='button' class='btn btn-info' onclick='consultarId(" . $produto['id'] . ")' title='Editar'><i class='fas fa-pen'></i></button>

                        <button type='button' class='btn btn-danger' onclick='ConfirmarExc(" . $produto['id'] . ")' title='Deletar'><i class='far fa-trash-alt'></i></button>

                        <button type='button' class='btn btn-warning' onclick='visualizar(" . $produto['id'] . ")'><i class='fas fa-eye' title='Visualizar'></i></button>
                        </td>
                    </tr>
                </tbody>";
    }
}

/** ========================================================================== */
if (isset($_POST['cadastrarProduto'])) {

    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : null;
    $descricao = (isset($_POST['descricao'])) ? $_POST['descricao'] : null;
    $quantidade = (isset($_POST['quantidade'])) ? $_POST['quantidade'] : null;
    $preco = (isset($_POST['preco'])) ? $_POST['preco'] : null;

    $produto->cadastrar($titulo, $descricao, $quantidade, $preco);
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

    $produto->editar($id, $titulo, $descricao, $quantidade, $preco);
}

/** ========================================================================== */
if (isset($_POST['buscarProduto'])) {

    $pesquisa = (isset($_POST['pesquisa'])) ? $_POST['pesquisa'] : null;

    $dados = $produto->buscar($pesquisa);

    echo "<thead> 
            <tr>
                <th>TÍTULO</th>
                <th>DESCRIÇÃO</th>
                <th>QUANTIDADE</th>
                <th>PREÇO</th>
                <th>AÇÕES</th>
            </tr>
        </thead>";

    foreach ($dados as $produto) {
        echo "  
                <tbody>
                    <tr>
                        <td>" . $produto['titulo'] . "</td>
                        <td>" . $produto['descricao'] . "</td>
                        <td>" . $produto['quantidade'] . "</td>
                        <td>" . $produto['valor'] . "</td>
                        <td>
                        <button type='button' class='btn btn-info' onclick='consultarId(" . $produto['id'] . ")' title='Editar'><i class='fas fa-pen'></i></button>

                        <button type='button' class='btn btn-danger' onclick='ConfirmarExc(" . $produto['id'] . ")' title='Deletar'><i class='far fa-trash-alt'></i></button>

                        <button type='button' class='btn btn-warning' onclick='visualizar(" . $produto['id'] . ")'><i class='fas fa-eye' title='Visualizar'></i></button>
                        </td>
                    </tr>
                </tbody>";
    }
}


/** ========================================================================== */

if (isset($_POST['pesquisarProduto'])) {

    $pesquisa = (isset($_POST['pesquisa'])) ? $_POST['pesquisa'] : null;
    $sel = (isset($_POST['selecao'])) ? $_POST['selecao'] : null;


    $dados = $produto->pesquisar($sel, $pesquisa);

    echo "<thead> 
            <tr>
                <th>TÍTULO</th>
                <th>DESCRIÇÃO</th>
                <th>QUANTIDADE</th>
                <th>PREÇO</th>
                <th>AÇÕES</th>
            </tr>
        </thead>";

    foreach ($dados as $produto) {
        echo "  
                <tbody>
                    <tr>
                        <td>" . $produto['titulo'] . "</td>
                        <td>" . $produto['descricao'] . "</td>
                        <td>" . $produto['quantidade'] . "</td>
                        <td>" . $produto['valor'] . "</td>
                        <td>
                        <button type='button' class='btn btn-info' onclick='consultarId(" . $produto['id'] . ")' title='Editar'><i class='fas fa-pen'></i></button>

                        <button type='button' class='btn btn-danger' onclick='ConfirmarExc(" . $produto['id'] . ")' title='Deletar'><i class='far fa-trash-alt'></i></button>

                        <button type='button' class='btn btn-warning' onclick='visualizar(" . $produto['id'] . ")'><i class='fas fa-eye' title='Visualizar'></i></button>
                        </td>
                    </tr>
                </tbody>";
    }
}




