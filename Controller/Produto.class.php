<?php

require "Conexao.class.php";

class Produto
{
    /**
     * Consulta de todos os dados de Produtos
     */
    public function listar()
    {
        $conexao = new Conexao();
        $conn = $conexao->conectar();

        try {

            $sql = "SELECT * FROM produto";
            $consulta = $conn->prepare($sql);

            $consulta->execute();

            return $consulta->fetchAll();
        } catch (PDOException $e) {
            echo $e;
        }
    }

    /**
     * Cadastrar Produto
     */
    public function cadastrar($titulo, $descricao, $quantidade, $preco)
    {

        $conexao = new Conexao();
        $conn = $conexao->conectar();

        try {

            $sql = "INSERT INTO produto VALUES (null,:titulo, :descricao, :quantidade, :preco)";

            $consulta = $conn->prepare($sql);
            $consulta->bindValue(":titulo", $titulo);
            $consulta->bindValue(":descricao", $descricao);
            $consulta->bindValue(":quantidade", $quantidade);
            $consulta->bindValue(":preco", $preco);

            $retorno = $consulta->execute();

            if ($retorno) {
                echo "O Livro " . $titulo . " foi cadastrado com sucesso";
            } else {
                echo "Erro ao cadastrar" . $titulo;
            }
        } catch (PDOException $e) {
            echo $e;
        }
    }

    /**
     * Deleta um prduto específico
     */
    public function deletar($id)
    {
        $conexao = new Conexao();
        $conn = $conexao->conectar();

        try {

            $sql = "DELETE FROM produto WHERE id = :id;";

            $consulta = $conn->prepare($sql);
            $consulta->bindValue(":id", $id);

            $retorno = $consulta->execute();

            if ($retorno) {
                echo "Produto deletado com sucesso";
            } else {
                echo "Erro ao deletar produto";
            }
        } catch (PDOException $e) {
            echo $e;
        }
    }

    public function consultar($id)
    {
        $conexao = new Conexao();
        $conn = $conexao->conectar();

        try {
            $sql = "SELECT * FROM produto WHERE id = :id;";

            $consulta = $conn->prepare($sql);
            $consulta->bindValue(":id", $id);

            $consulta->execute();

            $dados = $consulta->fetchAll()[0];
            echo json_encode($dados);
        } catch (PDOException $e) {
            echo $e;
        }
    }

    public function editar($id, $titulo, $descricao, $quantidade, $preco)
    {
        $conexao = new Conexao();
        $conn = $conexao->conectar();

        try {

            $sql = "UPDATE produto SET titulo = :titulo, descricao = :descricao, quantidade = :quantidade, preco = :preco WHERE id = :id";

            $editar = $conn->prepare($sql);
            $editar->bindValue(":id", $id);
            $editar->bindValue(":titulo", $titulo);
            $editar->bindValue(":descricao", $descricao);
            $editar->bindValue(":quantidade", $quantidade);
            $editar->bindValue(":preco", $preco);

            $retorno = $editar->execute();

            if ($retorno) {
                echo $titulo . " Editado com sucesso";
            } else {
                echo "Erro ao editar " . $titulo;
            }
        } catch (PDOException $e) {
            echo $e;
        }
    }

    public function pesquisar($pesquisa)
    {
        $conexao = new Conexao();
        $conn = $conexao->conectar();

        try {
            $sql = "SELECT * FROM produto WHERE titulo LIKE '%$pesquisa%' ";
            $pesquisar = $conn->prepare($sql);
            $pesquisar->execute();

            return $pesquisar->fetchAll();

        } catch (PDOException $e) {
            echo $e;
        }
    }
}
