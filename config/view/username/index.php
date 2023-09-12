<?php
    require_once("c://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/view/head/head.php");
    require_once("c://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/controller/userNameController.php");
    $obj = new userNameController();
    $rows = $obj->index();
?>
<div class="mb-3">
    <a href="/TheDot-Studio_Proceso_seleccion_V01/config/view/username/create.php" class="btn btn-primary">Agregar nuevo usuario</a>
</div>
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
      <?php if($rows): ?>
        <?php foreach($rows as $row):?>
            <tr>
                <th><?= $row[0] ?></th>
                <th><?= $row[1] ?></th>
                <th>
                    <a href="show.php?id=<?= $row[0]?>" class="btn btn-primary">Ver</a>
                    <a href="edit.php?id=<?= $row[0]?>" class="btn btn-success">Modificar</a>
                    <!-- Button trigger modal -->
                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea Eliminar el registro?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                El registro se eliminara y no se volvera a recuperar.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                <a href="delete.php?id=<?= $row[0]?>" type="button" class="btn btn-danger">Eliminar</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </th>
            </tr>
        <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registro</td>
            </tr>
        <?php endif;?>
  </tbody>
</table>
<?php
    require_once("c://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/view/head/footer.php");
?>