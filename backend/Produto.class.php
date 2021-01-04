<?php

    require_once "Conexao.class.php";

    class Produto {

        // Cadastro
<<<<<<< HEAD
        public function cadastrar($titulo,$descricao,$quantidade,$preco) {
=======
        public function cadastrar($titulo, $descricao,$quantidade) {
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16
            $conexao = new Conexao();
            $conn = $conexao->conectar();

            try {
<<<<<<< HEAD
                $sql = "INSERT INTO produto VALUES (null,:titulo,:descricao,:quantidade,:preco);";
=======
                $sql = "INSERT INTO pessoas VALUES (null, :titulo,:descricao, :quantidade);";
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16

                $consulta = $conn->prepare($sql);

                $consulta->bindValue(":titulo", $titulo);
                $consulta->bindValue(":descricao", $descricao);
                $consulta->bindValue(":quantidade", $quantidade);
<<<<<<< HEAD
                $consulta->bindValue(":preco", $preco);
=======
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16

                $retorno = $consulta->execute();

                if($retorno) {
<<<<<<< HEAD
                    echo "Produto cadastrado";
=======
                    echo "Pessoa cadastrada";
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16
                } else {
                    echo "Erro";
                }
            } catch(PDOException $e) {
                echo $e;
            }
        }

        // Listar
<<<<<<< HEAD
        public function listar() {
=======
     /*   public function listar() {
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16
            $conexao = new Conexao();
            $conn = $conexao->conectar();

            try {
<<<<<<< HEAD
                $sql = "SELECT * FROM produto;";
=======
                $sql = "SELECT * FROM pessoas;";
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16

                $consulta = $conn->prepare($sql);
                
                $consulta->execute();

                return $consulta->fetchAll();

            } catch(PDOException $e) {
                echo $e;
            }
        }

        // Deletar
        public function deletar($id) {
            $conexao = new Conexao();
            $conn = $conexao->conectar();

            try {
<<<<<<< HEAD
                $sql = "DELETE FROM produto WHERE id = :id;";
=======
                $sql = "DELETE FROM pessoas WHERE id = :id;";
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16

                $consulta = $conn->prepare($sql);

                $consulta->bindValue(":id", $id);

                $retorno = $consulta->execute();

                if($retorno) {
<<<<<<< HEAD
                    echo "Produto deletado com sucesso";
                } else {
                    echo "Erro ao deletar produto";
=======
                    echo "Pessoa deletada com sucesso";
                } else {
                    echo "Erro ao deletar pessoa";
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16
                }
            } catch(PDOException $e) {
                echo $e;
            }
        }

        // Editar
<<<<<<< HEAD
        public function editar($id,$titulo,$descricao,$quantidade,$preco) {
=======
        public function editar($id, $nome, $idade) {
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16
            $conexao = new Conexao();
            $conn = $conexao->conectar();

            try {
<<<<<<< HEAD
                $sql = "UPDATE produto SET titulo = :titulo, descricao = :descricao, quantidade = :quantidade, preco = :preco WHERE id = :id";
=======
                $sql = "UPDATE pessoas SET nome = :nome, idade = :idade WHERE id = :id";
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16

                $consulta = $conn->prepare($sql);

                $consulta->bindValue(":id", $id);
<<<<<<< HEAD
                $consulta->bindValue(":titulo", $titulo);
                $consulta->bindValue(":descricao", $descricao);
                $consulta->bindValue(":quantidade", $quantidade);
                $consulta->bindValue(":preco", $preco);

=======
                $consulta->bindValue(":nome", $nome);
                $consulta->bindValue(":idade", $idade);
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16

                $retorno = $consulta->execute();

                if($retorno) {
<<<<<<< HEAD
                    echo "Produto atualizada com sucesso";
                } else {
                    echo "Erro ao atualizar produto";
=======
                    echo "Pessoa atualizada com sucesso";
                } else {
                    echo "Erro ao atualizar pessoa";
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16
                }

            } catch(PDOException $e) {
                echo $e;
            }
        }

        // Consultar
        public function consultar($id) {
            $conexao = new Conexao();
            $conn = $conexao->conectar();

            try {
<<<<<<< HEAD
                $sql = "SELECT * FROM produto WHERE id = :id;";
=======
                $sql = "SELECT * FROM pessoas WHERE id = :id;";
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16

                $consulta = $conn->prepare($sql);
                
                $consulta->bindValue(":id", $id);

                $consulta->execute();

                $dados = $consulta->fetchAll()[0];
                echo json_encode($dados);

            } catch(PDOException $e) {
                echo $e;
            }
<<<<<<< HEAD
        }
=======
        }*/
>>>>>>> 9cbc7a8e73d36ea8122e4f6e878d7f0bb2767e16
    }

?>