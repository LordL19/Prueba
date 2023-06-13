<?php

class View{

    function __construct(){

        //echo"<p> Vista Base</p>";
        
    }

    function render($nombre){ //main/index
        $ruta_vista = "views/".$nombre.".php";
        //echo "ruta_vista:".$ruta_vista;
        require "views/".$nombre.".php";
    }
    //

}

?>