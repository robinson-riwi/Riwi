<?php
require_once "./core/core.php";

$c = isset($_REQUEST['c']) ? $_REQUEST['c'] : 'Home';
$m = isset($_REQUEST['m']) ? $_REQUEST['m'] : 'index';
$c .= "Controller";

if (file_exists("controllers/" . $c . ".php")) {
    require_once("controllers/" . $c . ".php");
    $c = new $c;
    call_user_func(array($c, $m));
}