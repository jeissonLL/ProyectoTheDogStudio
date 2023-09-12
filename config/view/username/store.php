<?php
    require_once("C://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/controller/userNameController.php");
    $obj = new userNameController();
    $obj->guardar($_POST['nombre']);
?>