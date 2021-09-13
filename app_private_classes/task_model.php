<?php

class Task {

    private $id;
    private $id_status;
    private $task_msg;
    private $task_date;

    public function __get($attr) {
        return $this->$attr;
    }

    public function __set($attr, $value) {
        $this->$attr = $value;
    }
}

?>