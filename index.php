<?php

/*require_once "libs/app.php";
require_once "libs/controller.php";
require_once "libs/model.php";
require_once "libs/view.php";
require_once "libs/config.php"; --SE AÑADIO
require_once "libs/database.php"; -- SE AÑADIO
$app =new App();*/

require_once "controller/template.php";
$template = new TemplateController();
$template -> template();



?>