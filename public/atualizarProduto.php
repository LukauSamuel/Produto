<?php

include __DIR__ . '/header.php';
include_once '../app/Db/Database.php';
require_once('../app/Entity/Produto.php');

$list = new Produto($connect);
/** */
if (!empty($_GET["atualizar"])) {
    $id  = $_GET["atualizar"];

    $resp = $list->getID($id);

?>
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Atualizar Produto</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="../controll/atualizarProduto.php" method="POST">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nome</label>
                                        <input type="text" id="first-name-column" class="form-control" placeholder="Nome" name="nome" value="<?php echo $resp['nome']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Categoria</label>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="basicSelect" name="categoria" value="<?php echo $resp['categoria']; ?>">
                                                <option value=" Acessórios">Acessórios</option>
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
                                        <input type="text" id="email-id-column" class="form-control" name="numeroProduto" placeholder="Nº Produto" value="<?php echo $resp['numeroProduto']; ?>">
                                    </div>
                                </div>
                                <div class=" col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Quantidade</label>
                                        <input type="number" id="city-column" class="form-control" placeholder="Quantidade" name="quantidade" value="<?php echo $resp['quantidade']; ?>">
                                    </div>
                                </div>

                                <div class=" col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Preço</label>
                                        <input type="text" id="company-column" class="form-control" name="preso" placeholder="Preço" value="<?php echo $resp['preso']; ?>">
                                    </div>
                                </div>
                                <div class=" col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Descrição</label>
                                        <textarea class="form-control" name="descricao" value="<?php echo $resp['descricao']; ?>" id=" exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="id" value="<?php echo $resp['id']; ?>">

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Atualizar</button>
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
}

include __DIR__ . '/footer.php';
?>