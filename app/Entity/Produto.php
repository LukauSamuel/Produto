<?php

#namespace App\Entity;

/**
 *
 */
class Produto
{

  public $id;
  public $nome;
  public $data;
  public $preso;
  public $descricao;
  public $quantidade;
  public $numeroProduto;
  public $categoria;
  public $imagem;
  private $db;


  public function __construct($DBpdo)
  {
    $this->db = $DBpdo;
  }

  /**
   * função que vai cadastrar o produto
   */
  public function createProduto()
  {
    try {
      $stm = "INSERT INTO produto (nome, preso, descricao, quantidade, numeroProduto, categoria,imagem) VALUES(:nome, :preso, :descricao, :quantidade, :numeroProduto, :categoria,:imagem)";
      $stmt = $this->db->prepare($stm);
      $stmt->bindparam(":nome", $this->nome, PDO::PARAM_STR);
      $stmt->bindparam(":preso", $this->preso, PDO::PARAM_STR);
      $stmt->bindparam(":descricao", $this->descricao, PDO::PARAM_STR);
      $stmt->bindparam(":quantidade", $this->quantidade, PDO::PARAM_INT);
      $stmt->bindparam(":numeroProduto", $this->numeroProduto, PDO::PARAM_INT);
      $stmt->bindparam(":categoria", $this->categoria, PDO::PARAM_STR);
      $stmt->bindparam(":categoria", $this->imagem, PDO::PARAM_STR);

      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }

  /**
   * Listar produto
   */
  public function listProduto()
  {
    $sql = 'SELECT * FROM produto ORDER BY id DESC';
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }

  /**
   * Eliminar produto
   */
  public function delete($id)
  {
    $sql = 'DELETE FROM produto WHERE id = :id';
    $stmt = $this->db->prepare($sql);;
    $stmt->execute(['id' => $id]);
    return true;
  }
  /**
   * Consulta Produto a partir do ID
   */
  public function getID($id)
  {
    $stmt = $this->db->prepare("SELECT * FROM produto WHERE id=:id");
    $stmt->execute(array(":id" => $id));
    $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
    return $editRow;
  }

  /**
   * Atualizar Produto em função do ID
   */
  public function update()
  {
    try {
      $stmt = $this->db->prepare("UPDATE produto SET nome=:nome, preso=:preso, descricao=:descricao, quantidade=:quantidade,
      numeroProduto=:numeroProduto, categoria=:categoria WHERE id=:id");

      $stmt->bindparam(":nome", $this->nome, PDO::PARAM_STR);
      $stmt->bindparam(":preso", $this->preso, PDO::PARAM_STR);
      $stmt->bindparam(":descricao", $this->descricao, PDO::PARAM_STR);
      $stmt->bindparam(":quantidade", $this->quantidade, PDO::PARAM_INT);
      $stmt->bindparam(":numeroProduto", $this->numeroProduto, PDO::PARAM_INT);
      $stmt->bindparam(":categoria", $this->categoria, PDO::PARAM_STR);
      $stmt->bindparam(":id", $this->id, PDO::PARAM_INT);
      $stmt->execute();

      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }
}