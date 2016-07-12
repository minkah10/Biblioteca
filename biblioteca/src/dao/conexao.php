<?php

class Conexao
{

    function openConnection()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=biblioteca', 'root', 'senha');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        };

        return $pdo;
    }

    function livrosDisponiveis()
    {
        $status = 'Disponivel';

        $conn = new Conexao();
        $stmt = $conn->openConnection()->prepare('SELECT * FROM livro WHERE status = :status');
        $stmt->bindParam(':status', $status, PDO::PARAM_INT);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            print_r($row);
        }

    }

    function insereLivros($nome, $autor)
    {
        $status = 'Disponivel';
        try {
            $conn = new Conexao();
            $stmt = $conn->openConnection()->prepare('INSERT INTO livro VALUES (NULL ,:nome, :autor, :status)');
            $stmt->execute(array(':nome' => $nome, ':autor' => $autor, ':status' => $status));

            //echo $nome," ".$autor," ".$status;

        } catch (PDOException $e) {
            echo 'Error ao inserir ' . $e->getMessage();
        };
    }

    function excluiLivro($id)
    {
        try {
            $conn = new Conexao();
            $stmt = $conn->openConnection()->prepare('DELETE FROM livro WHERE id = :id');
            $stmt->execute(array(':id' => $id));

            //echo "Item: ". $id." exluido";

        } catch (PDOException $e) {
            echo 'Error ao excluir ' . $e->getMessage();
        }

    }

    function alteraLivro($id,$nome,$autor){
        try {
            $conn = new Conexao();
            $stmt = $conn->openConnection()->prepare('UPDATE livro SET nome = :nome, autor = :autor WHERE id = :id');
            $stmt->execute(array(':id' => $id, ':nome' => $nome, ':autor' => $autor));

            //echo "Item: ". $id." alterado";

        } catch (PDOException $e) {
            echo 'Error ao alterar ' . $e->getMessage();
        }
    }
}

;


?>