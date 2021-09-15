<?php

require "task_model.php";
require "task_service.php";
require "task_connect.php";

$task = new Task();
$task->__set('task', $_POST['task']);

print_r($_POST['task']);

$con = new Connection();

$taskService = new TaskService($con, $task);
$taskService->create();

echo '<pre>';
    print_r($taskService);
echo '</pre>';

?>