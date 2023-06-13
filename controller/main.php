<?php

class Main extends Controller{
    function __construct()
    {
        parent:: __construct(); //llamamos al constructor del controlador base
        $this->view->render("main/index");
        echo "<p>Bienvenidos al recurso Main</p>";
    }
    function saludar(){
        echo "<p>Hola desde Main</p>";
    }
}

?>