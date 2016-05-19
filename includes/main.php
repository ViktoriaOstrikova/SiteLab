<?php


require_once "includes/config.php";
require_once "includes/connect.php";
require_once "includes/helpers.php";
require_once "includes/models/product.model.php";
require_once "includes/models/category.model.php";
require_once "includes/controllers/home.controller.php";
require_once "includes/controllers/category.controller.php";



header('Cache-Control: max-age=3600, public');
header('Pragma: cache');
header("Last-Modified: ".gmdate("D, d M Y H:i:s",time())." GMT");
header("Expires: ".gmdate("D, d M Y H:i:s",time()+3600)." GMT");

?>