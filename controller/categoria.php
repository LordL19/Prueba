<?php

class Categoria extends Controller{

    function __construct(){

        parent::__construct();
        $this->view->render("categoria/index");
        //parent::demo();
        echo "<p>Llamaste a la al controlador categoria</p>";

    }

     

}

?>