<?php

include __DIR__ . '/header.php';
$msg = isset ($_SESSION['msg']);
if ($msg) {
?>
<div class="alert alert-success alert-dismissible show fade">
    Cadastro efectuado com sucesso .........
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php

}
?>
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Cadastrar Utilizador</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="../controll/cadastroAdm.php" method="POST">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nome</label>
                                        <input type="text" id="first-name-column" class="form-control" placeholder="Nome" name="nome">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Categoria</label>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="basicSelect" name="categoria">
                                                <option value="Consumidor">Consumidor</option>
                                                <option value="Administrador">Administrador</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">E-mail</label>
                                        <input type="email" id="email-id-column" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Telefone</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="telefone" name="telefone">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Password</label>
                                        <input type="password" id="company-column" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Confirma Password</label>
                                        <input type="password" id="email-id-column" class="form-control" name="confirmPassword" placeholder="Confirma Password">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <div class='form-check'>
                                        <div class="checkbox">
                                            <input type="checkbox" id="checkbox5" class='form-check-input' checked>
                                            <label for="checkbox5">Remember Me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
unset($_SESSION['msg']);
include __DIR__ . '/footer.php';
?>