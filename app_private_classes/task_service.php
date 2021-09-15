<?php

class TaskService {

    private $con;
    private $task;

    public function __construct(Connection $con, Task $task) {
        $this->con = $con->connect();
        $this->task = $task;
    }

    public function create(){
        $query = "INSERT INTO tb_tasks(task_msg) values (:task_msg)";
        
        $stmt = $this->con->prepare($query);
        $stmt->bindValue(':task_msg', $this->task->__get('task'));
    

        $stmt->execute();
    }

    public function read() {


    }


    public function update() {


    }

    public function delete() {

    }
}


?>