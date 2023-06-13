<?php

class Controller{

    function __construct(){

        //echo"<p> Controlador Base</p>";
        $this->view= new View(); //objeto vista
    }

    function loadModel($model){

        //creamos la ruta al modelo
        $url='models/'.$model.'model.php';
        if(file_exists($url)){
            require $url;
            //nombre del modelo
            $modelName = $model.'Model';
            //objeto model
            $this->model = new $modelName();
        }
    }


    //function demo(){
   //     echo "<p>Me llamaste?</p>";
   // }  

}

?>