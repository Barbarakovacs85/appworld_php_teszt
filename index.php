<?php

session_start();

spl_autoload_register( function ( $file ) {
    include($file.".php");
} );

use controllers\CalculatorController;

$page = new CalculatorController;

$getpage = $_GET["page"];
$page->$getpage();

unset($_SESSION["success"],$_SESSION["error"]);
?>
