<?php

/**
 * ZONA QUE SERA REGISTAR O PRODUTO
 */


include_once '../app/Db/Database.php';
require_once('../app/Entity/Produto.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["nome"]) || empty($_POST["numeroProduto"]) || empty(trim($_POST["quantidade"])) || empty(trim($_POST["preso"]))) {
        echo '<script>alert("preencha todos os campos");history.back();</script>';
    } elseif (!empty($_POST['nome']) && !empty($_POST['numeroProduto']) && !empty($_POST['preso'])) {
        $user = new Produto($connect);

        $user->nome = $_POST['nome'];
        $user->preso = $_POST['preso'];
        $user->categoria = $_POST['categoria'];
        $user->descricao = $_POST['descricao'];
        $user->numeroProduto = $_POST['numeroProduto'];
        $user->descricao = $_POST['descricao'];
        $user->quantidade = $_POST['quantidade'];
        $user->id = $_POST['id'];
        $resp = $user->update();

        if ($resp) {
            session_start();
            $_SESSION['atualiza'] = True;
            header("Location: ../public/listarProduto.php");
            exit;
        }
    }
}