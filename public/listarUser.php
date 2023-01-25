<?php

include __DIR__ . '/header.php';
include_once '../app/Db/Database.php';
require_once('../app/Entity/User.php');

$list = new User($connect);
if (!empty($_GET["elimina"])) {
    $id = $_GET["elimina"];
    $list->delete($id);
}
$resp = $list->listUser();
?>
<section class="section">
    <div class="card">
        <div class="card-header">
            Lista de Utilizador
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Categoria</th>
                        <th>Status</th>
                        <th>Opção</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($resp as $row) {
                    ?>
                    <tr>
                        <td><?php print($row['nome']); ?></td>
                        <td><?php print($row['email']); ?></td>
                        <td><?php print($row['telefone']); ?></td>
                        <td><?php print($row['categoria']); ?></td>
                        <td>
                            <span class="badge bg-success">
                                <?php print($row['status']); ?>
                            </span>
                        </td>

                        <td>
                            <div class="buttons">
                                <a href="?elimina=<?php print($row['id']); ?>" class="btn btn-danger">Eliminar</a>
                            </div>
                        </td>
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