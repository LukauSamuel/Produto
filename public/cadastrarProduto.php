<?php

include __DIR__ . '/header.php';
$msg = isset($_SESSION['msg']);
if ($msg) {
?>
<div class="alert alert-success alert-dismissible show fade">
    Produto Registado com sucesso.........
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
                    <h4 class="card-title">Registar Produto</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="../controll/produto.php" method="POST" enctype="multipart/form-data">
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
                                                <option value="Acessórios">Acessórios</option>
                                                <option value="Cabos">Cabos</option>
                                                <option value="Automovel">Automovel</option>
                                                <option value="Calçado">Calçado</option>
                                                <option value="Vestuario">Vestuario</option>
                                                <option value="Alimento">Alimento</option>
                                                <option value="Bebidas">Bebidas</option>
                                                <option value="Mobilhario">Mobilhario</option>
                                                <option value="Curso">Curso</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Número do Produto</label>
                                        <input type="text" id="email-id-column" class="form-control" name="numeroProduto" placeholder="Nº Produto">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Quantidade</label>
                                        <input type="number" id="city-column" class="form-control" placeholder="Quantidade" name="quantidade">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Preço</label>
                                        <input type="text" id="company-column" class="form-control" name="preso" placeholder="Preço">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Descrição</label>
                                        <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>


                                <div class="col-md-6 col-12">
                                    <label for="formFile" class="form-label">Arquivo
                                    </label>
                                    <input class="form-control" type="file" id="formFile" name="imagem">
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