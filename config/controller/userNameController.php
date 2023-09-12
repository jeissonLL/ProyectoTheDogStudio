<?php
    class userNameController{
        private $model;
        public function __construct()
        {
            //require_once("c://xampp/TheDot-Studio_Proceso_seleccion_V01/config/model/userNameModel.php");
            require_once("c://xampp/htdocs/TheDot-Studio_Proceso_seleccion_V01/config/model/userNameModel.php");
            $this->model = new userNameModel();
        }

        public function guardar($nombre){
            $id = $this->model->insertar($nombre);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }

        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("location: index.php");
        }

        public function index(){
            return ($this->model->index()) ? $this->model->index(): false;
        }

        public function update($id, $nombre){
            return ($this->model->update($id, $nombre) != false) ? header("location:show.php?id".$id) : header("location:index.php");
        }

        public function delete($id){
            return ($this->model->delete($id)) ? header("location: index.php") : header("location:show.php?id".$id);
        }
    }
?>