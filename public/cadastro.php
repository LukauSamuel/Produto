<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro - Sistema de gestão de Produto</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css" />
    <link rel="stylesheet" href="../assets/css/app.css" />
    <link rel="stylesheet" href="../assets/css/pages/auth.css" />
</head>

<body>


    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <!--<div class="auth-logo">
              <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" /></a>
            </div>-->
                    <h1 class="auth-title">Cadastro</h1>
                    <p class="auth-subtitle mb-5"></p>

                    <form action="../controll/cadastro.php" method="POST">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="nome" class="form-control form-control-xl" placeholder="Username" />
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="email" class="form-control form-control-xl" placeholder="Email" />
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="telefone" class="form-control form-control-xl" placeholder="Telefone" />
                            <div class="form-control-icon">
                                <i class="bi bi-fone"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control form-control-xl" placeholder="Password" />
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="confirmPassword" class="form-control form-control-xl" placeholder="Confirm Password" />
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>
    </div>
</body>

</html>