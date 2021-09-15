<?php

class Connection {

    private $host = 'localhost';
    private $dbname = 'tasks';
    private $username = 'root';
    private $password = 'root';

    public function connect() {
        try {
            $con = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->username",
                "$this->password"
            );

            return $con;
        } catch (PDOException $e) {
            echo '<p>' . $e->getMessage() . '</p>';
        }
    }
}

?>