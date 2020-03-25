<?php

namespace app\models;

use app\core\Model;

class ProdutoModel extends Model {

    public function __construct() {
        parent:: __construct();
    }

    public function lista() {
        $sql = "SELECT * FROM Produto";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getProduto($id) {
        $sql = "SELECT * FROM Produto WHERE idproduto = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();

        $resultado = array();
        if ($qry->rowCount() > 0) {
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
        }
        return $resultado;
    }

    public function inserir($patr, $nome, $descr, $marc, $mode, $qtde) {

        $qry = $this->db->prepare("INSERT INTO Produto SET patrimonio = :patr, nome = :nome, descricao = :descr, marca = :marc, modelo = :mode, quantidade = :qtde");

        $qry->bindValue(":patr", $patr);
        $qry->bindValue(":nome", $nome);
        $qry->bindValue(":descr", $descr);
        $qry->bindValue(":marc", $marc);
        $qry->bindValue(":mode", $mode);
        $qry->bindValue(":qtde", $qtde);
        $qry->execute();

        return $this->db->lastInsertId();
    }

    public function atualizar($id, $patr, $nome, $descr, $marc, $mode, $qtde) {

        $qry = $this->db->prepare("UPDATE Produto SET patrimonio = :patr, nome = :nome, descricao = :descr, marca = :marc, modelo = :mode, quantidade = :qtde WHERE idproduto= :id");

        $qry->bindValue(":patr", $patr);
        $qry->bindValue(":nome", $nome);
        $qry->bindValue(":descr", $descr);
        $qry->bindValue(":marc", $marc);
        $qry->bindValue(":mode", $mode);
        $qry->bindValue(":qtde", $qtde);
        $qry->bindValue(":id", $id);
        $qry->execute();


        if ($qry->rowCount() > 0) {
            echo "<h2>Produto atualizado com sucesso</h2>";
        } else {
            echo "<h2>Produto NÃO foi atualizado com sucesso</h2>";
        }
    }

    public function excluir($id) {
        $qry = $this->db->prepare("DELETE FROM Produto WHERE idproduto= :id");
        $qry->bindValue(":id", $id);
        $qry->execute();
    }

    public function pesquisar($buscar) {
        
        $qry = $this->db->prepare("SELECT * FROM Produto WHERE nome LIKE :buscar ");
        $qry->bindValue(":buscar", $buscar);
        $qry->execute();

        $resultado = array();

        if ($qry->rowCount() > 0 ) {
            echo ' <script>alert("Data search")</script>';
            $resultado = $qry->fetchAll(\PDO::FETCH_OBJ);
        }else {
            echo ' <script>alert("Not data found")</script>';
        }


        return $resultado;
        
    }

}
