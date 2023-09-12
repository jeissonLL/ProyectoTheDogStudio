<?php
    require_once("c://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/controller/userNameController.php");
    $obj = new userNameController();
    $obj->delete($_GET['id']);
?>