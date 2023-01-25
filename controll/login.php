<?php

#use App\Entity\User;
include_once '../app/Db/Database.php';
require_once('../app/Entity/User.php');
#include_once '../app/Entity/User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["email"])) || empty(trim($_POST["password"]))) {
        echo '<script>alert("preencha todos os campos");history.back();</script>';
    } elseif (!empty($_POST['email']) && !empty($_POST['password'])) {
        $user = new User($connect);

        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $resp = $user->loginUser();


        if ($resp) {
            header("Location: ../public/home.php");
            exit;
        } else {
            echo '<script>alert("Dados errados da conta");history.back();</script>';
            exit;
        }
    }
}