<?php

session_start();

include("controllers/CalculatorController.php");

$page = new CalculatorController;

$getpage = $_GET["page"];
$page->$getpage();

unset($_SESSION["success"],$_SESSION["error"]);