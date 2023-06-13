<?php

    class App{
        function __construct()
        {
            //echo "<p>Mi aplicacion MVC en WEB II</p>";
            //trabajamos la url
            $url= $_GET['url']; 
            //echo $url;
            //echo "<br>";
            $url = explode("/", $url);
            if(empty($url[0])){
                $ruta = 'controller/main.php';
                require_once $ruta;
                $c = new Main();
                $c->loadModel('main');
                return false;
            }
            //echo $url[0];
            //echo "<br>";
            $ruta = "controller/".$url[0].".php";
            //echo $ruta;
            //echo"<br>";
            if(file_exists($ruta)){
                require_once $ruta;
                $c= new $url[0]; //AQUI SE CREA
                //Verificar metodo en $url[1]// CREAMOS EL OBJETO DEL CONTROLADOR
                $c->loadModel($url[0]);
                if(isset($url[1])){
                    //llamamos al metodo
                    $c -> {$url[1]}();

                }

            }else{
                require_once "controller/errores.php";
                $e= new Errores();
            }
            
            
        }
        
    }
    
?>