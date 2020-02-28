<?php

define('APP', 'Application/');

$confPath = 'config.json';
$page = @$_GET['page'] ? $_GET['page'] : 'home';

session_start();

require_once APP . 'functions.php';

switch ($page)
{
    case 'signUp': require_once APP . 'Core/signUp.php'; break;
    case 'signIn': require_once APP . 'Core/signIp.php'; break;
    case 'auth': require_once APP . 'Core/auth'; break;
    case 'validate': require_once APP . 'Core/validate.php'; break;
    case 'Logout': require_once APP . 'Core/logout.php'; break;
     
}

require_once APP . 'Templates/_layout.php';

?>