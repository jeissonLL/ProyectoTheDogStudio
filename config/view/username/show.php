<?php
    require_once("c://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/view/head/head.php");
    require_once("c://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/controller/userNameController.php");
    $obj = new userNameController();
    $obj->show($_GET['id']);
    $date = ($obj->show($_GET['id']));
?>
<h2 class="text-center">Registros</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success">Actualizar</a>

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
                <a href="delete.php?id=<?= $date[0]?>" type="button" class="btn btn-danger">Eliminar</a>
            </div>
            </div>
        </div>
    </div>
</div>
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $date["id"]?></td>
      <td><?= $date["nombre"]?></td>
    </tr>
  </tbody>
</table>
<?php
    require_once("c://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/view/head/footer.php");
?>