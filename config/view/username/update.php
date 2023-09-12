<?php
    require_once("c://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/controller/userNameController.php");
    $obj = new userNameController();
    $obj->update($_POST['id'], $_POST['nombre']);
?>