<?php

#namespace App\Entity;

#use App\Db\Database;

#require_once './Db/Database.php';


/**
 *
 */

class User
{
  public $id;
  public $nome;
  public $email;
  public $telefone;
  public $password;
  public $categoria;
  public $status = 'ativado';
  public $data;
  private $db;


  public function __construct($DBpdo)
  {
    $this->db = $DBpdo;
  }


  public function create()
  {
    try {
      $stm = "INSERT INTO user (nome, email, password, categoria, status,telefone) VALUES(:nome,:email,:password,:categoria,:status,:telefone)";
      $stmt = $this->db->prepare($stm);
      $stmt->bindparam(":nome", $this->nome, PDO::PARAM_STR);
      $stmt->bindparam(":email", $this->email, PDO::PARAM_STR);
      $stmt->bindparam(":password", $this->password, PDO::PARAM_STR);
      $stmt->bindparam(":categoria", $this->categoria, PDO::PARAM_STR);
      $stmt->bindparam(":status", $this->status, PDO::PARAM_STR);
      $stmt->bindparam(":telefone", $this->telefone, PDO::PARAM_STR);

      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }

  /**
   * Efectuar o login do utilizador no sistema
   */
  public function loginUser()
  {
    $sql = "SELECT id, nome, email, categoria, password FROM user WHERE email=:email";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
   

    $stmt->execute();


    if ($stmt->rowCount() == 1) {

      if ($results = $stmt->fetch()) {
        $hashed_password = $results['password'];
        if (password_verify($this->password, $hashed_password)) {
          session_start();
          $_SESSION['userlogin'] = $results['nome'];
          $_SESSION['categoria'] = $results['categoria'];
          $_SESSION['id'] = $results['id'];
          return true;
        }
      }
    } else {
      return false;
    }
  }

  /**
   * Listar todos utilizador do sistema
   */
  public function listUser()
  {
    $sql = 'SELECT * FROM user ORDER BY id DESC';
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }

  /**
   * Eliminar Utilizador
   */
  public function delete($id)
  {
    $sql = 'DELETE FROM user WHERE id = :id';
    $stmt = $this->db->prepare($sql);;
    $stmt->execute(['id' => $id]);
    return true;
  }
}