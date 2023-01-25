<?php

/**
 * ZONA QUE SERA CADASTRADO O UTILIZADOR QUE VEM PARTIR DE FORA.
 */


include_once '../app/Db/Database.php';
require_once('../app/Entity/User.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["nome"]) || empty(trim($_POST["email"])) || empty(trim($_POST["password"]))) {
    echo '<script>alert("preencha todos os campos");history.back();</script>';
  } elseif (strlen(trim($_POST["password"])) < 6) {
    echo '<script>alert("A senha é muito curta!");history.back();</script>';
  } elseif ($_POST["password"] != $_POST['confirmPassword']) {
    echo '<script>alert("A senha não confere");history.back();</script>';
  } elseif (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $user = new User($connect);

    $user->nome = $_POST['nome'];
    $user->email = $_POST['email'];
    $param_password = $_POST['password'];
    $user->categoria = $_POST['categoria'];
    $user->telefone = $_POST['telefone'];
    $user->password = password_hash($param_password, PASSWORD_DEFAULT);
    $resp = $user->create();

    if ($resp) {
      session_start();
      $_SESSION['msg'] = True;
      #$_SESSION['id'] = $resp->id;
      header("Location: ../public/cadastroAdm.php");
      exit;
    }
  }
}