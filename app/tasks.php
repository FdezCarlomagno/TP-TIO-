<?php
    
function getTasks(){
    //abrir conexion
    $db = new PDO('mysql:host=localhost;'
    .'dbname=to_do_list;charset=utf8'
    , 'root', '');

    // Ejecuto query

    $query = $db->prepare('SELECT * FROM tareas');
    $query = execute();

    //OBTENER TAREAS DE LA DB
    $tasks = $query->fetchAll(PDO::FETCH_OBJ);

    return $tasks;
}

function showTasks(){
    $tasks = getTasks();

    require_once "./templates/header.php";

    echo "<ul>";
    foreach($tasks as $task){
        echo "<li>".$task->nombre. " + ".$tasks->descripcion."</li>";
    }
    echo "</ul>";

    require_once "./templates/footer.php";
}