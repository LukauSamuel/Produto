<!DOCTYPE html>
<html lang="en">
<?php session_start();
    
if (empty($_SESSION['userlogin'])) {
    header("Location: ../index.php");
    exit;
} elseif (isset($_GET['out']) == 'out') {
    unset($_SESSION['userlogin']);
    session_destroy();
    header("Location: ../index.php");
    exit;
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de gestão de Produto</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="../assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="./home.php"><img src="../assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                            <?php echo $_SESSION['categoria']; ?>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu ">
                        <li class="sidebar-title ">Menu</li>

                        <!--<li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Produto</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="component-alert.html">Alert</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-badge.html">Badge</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-breadcrumb.html">Breadcrumb</a>
                                </li>



                            </ul>
                        </li>-->

                        <!--<li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Extra Components</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="extra-component-avatar.html">Avatar</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-sweetalert.html">Sweet Alert</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-toastify.html">Toastify</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-rating.html">Rating</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-divider.html">Divider</a>
                                </li>
                            </ul>
                        </li>-->
                        <li class="sidebar-item  ">
                            <a href="./cadastrarProduto.php" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Cadstarar Produto</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="./listarProduto.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Listar Produto</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="./consultarProduto.php" class='sidebar-link'>
                                <i class="bi bi-envelope-fill"></i>
                                <span>Consultar Produto</span>
                            </a>
                        </li>

                        <?php
                        $nivel = $_SESSION['categoria'];
                        if ($nivel == 'Administrador') {
                            # code...

                        ?>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>User</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="./cadastroAdm.php">Criar Conta</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="./listarUser.php">Listar Conta</a>
                                </li>

                            </ul>
                        </li>
                        <?php
                        } ?>

                        <!--  <li class="sidebar-title">Pages</li>

                        <li class="sidebar-item  ">
                            <a href="application-email.html" class='sidebar-link'>
                                <i class="bi bi-envelope-fill"></i>
                                <span>Email Application</span>
                            </a>
                        </li>



                        <li class="sidebar-item  ">
                            <a href="application-checkout.html" class='sidebar-link'>
                                <i class="bi bi-basket-fill"></i>
                                <span>Checkout Page</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="auth-login.html">Login</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="auth-register.html">Register</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="auth-forgot-password.html">Forgot Password</a>
                                </li>
                            </ul>
                        </li>-->


                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600"></h6>
                                            <p class="mb-0 text-sm text-gray-600"></p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="../assets/images/faces/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">

                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i>
                                            Mu Perfil</a>
                                    </li>

                                    <li><a class="dropdown-item" href="?out=out"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content">
                <div class="page-heading">