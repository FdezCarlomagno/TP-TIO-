<?php 


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once "./app/tasks.php";

if(!empty($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = "home";
}

$params = explode('/', $action);


switch($params[0]){
    case "home":
        showTasks();
        break;
    default: 
        break;
    
}

