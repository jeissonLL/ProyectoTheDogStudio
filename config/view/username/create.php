<?php
    //require_once("C://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/view/head/head.php");
    require_once("C://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/view/head/head.php");
?>


<form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
        <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
</form>

<?php
    //require_once("C://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/view/head/footer.php");
    require_once("C://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/view/head/footer.php");
?>