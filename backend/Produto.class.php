<?php

require_once "Conexao.class.php";

class Produto
{

    // Cadastro
    public function cadastrar($titulo, $descricao, $quantidade, $preco)
    {

        $conexao = new Conexao();
        $conn = $conexao->conectar();

        try {

            $sql = "INSERT INTO produto VALUES (null,:titulo, :descricao, :quantidade, :preco);";


            $consulta = $conn->prepare($sql);

            $consulta->bindValue(":titulo", $titulo);
            $consulta->bindValue(":descricao", $descricao);
            $consulta->bindValue(":quantidade", $quantidade);
            $consulta->bindValue(":preco", $preco); 
            $retorno = $consulta->execute();

            if ($retorno) {
                echo "Produto cadastrado";
            } else {
                echo "Erro";
            }
        } catch (PDOException $e) {
            echo $e;
        }
    }

    // Listar

    public function listar()
    {

        $conexao = new Conexao();
        $conn = $conexao->conectar();

        try {

            $sql = "SELECT * FROM produto;";


            $consulta = $conn->prepare($sql);

            $consulta->execute();

            return $consulta->fetchAll();
        } catch (PDOException $e) {
            echo $e;
        }
    }

    // Deletar
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

    // Editar

    public function editar($id, $titulo, $descricao, $quantidade, $preco)
    {

        $conexao = new Conexao();
        $conn = $conexao->conectar();

        try {

            $sql = "UPDATE produto SET titulo = :titulo, descricao = :descricao, quantidade = :quantidade, preco = :preco WHERE id = :id;";


            $consulta = $conn->prepare($sql);

            $consulta->bindValue(":id", $id);

            $consulta->bindValue(":titulo", $titulo);
            $consulta->bindValue(":descricao", $descricao);
            $consulta->bindValue(":quantidade", $quantidade);
            $consulta->bindValue(":preco", $preco);



            $retorno = $consulta->execute();

            if ($retorno) {

                echo "Produto atualizada com sucesso";
            } else {
                echo "Erro ao atualizar produto";
            }
        } catch (PDOException $e) {
            echo $e;
        }
    }

    // Consultar
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
}
