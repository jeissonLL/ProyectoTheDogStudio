<?php
    require_once("c://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/view/head/head.php");
    require_once("c://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/controller/userNameController.php");
    $obj = new userNameController();
    $user = $obj->show($_GET['id']);
?>
    <form action="update.php" method="post" autocomplete="off">
        <h2>Modificar registros</h2>
        <div class="mb-3 row">
            <label for="staticId" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="text" name="id" class="form-control-plaintext" id="staticId" value="<?= $user[0]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" name="nombre" class="form-control" id="inputName" value="<?= $user[1]?>">
            </div>
        </div>
        <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
        </div>
    </form>
<?php
    require_once("c://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/view/head/footer.php");
?>