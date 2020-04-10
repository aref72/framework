<?php
include_once "./lib/Route.php";
use app\lib\Rout;

$rout = new Rout();
$r= isset($_GET['r']) ? $_GET['r']:'home';
$rout->run($r);

?>