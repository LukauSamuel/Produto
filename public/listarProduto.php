<?php

include __DIR__ . '/header.php';
include_once '../app/Db/Database.php';
require_once('../app/Entity/Produto.php');

$list = new Produto($connect);

if (!empty($_GET["elimina"])) {
    $id = $_GET["elimina"];
    $list->delete($id);
}

$resp = $list->listProduto();
?>
<section class="section">
    <div class="card">
        <div class="card-header">
            Lista de Produto
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Nª Produto</th>
                        <th>Opção</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($resp as $row) {
                    ?>
                    <tr>
                        <td><?php print($row['nome']); ?></td>
                        <td><?php print($row['categoria']); ?></td>
                        <td><?php print($row['preso']); ?></td>
                        <td><?php print($row['quantidade']); ?></td>
                        <td><?php print($row['numeroProduto']); ?></td>
                        <td>
                            <?php
                                $nivel = $_SESSION['categoria'];
                                if ($nivel == 'Administrador') {
                                ?>
                            <div class="buttons">
                                <a href="./atualizarProduto.php?atualizar=<?php print($row['id']); ?>" class="btn btn-primary">Atualizar</a>
                                <a href="?elimina=<?php print($row['id']); ?>" class="btn btn-danger">Eliminar</a>
                            </div>
                        </td>
                        <?php
                                }
                        ?>
                    </tr>
                    <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>

</section>
<?php

include __DIR__ . '/footer.php';
?>