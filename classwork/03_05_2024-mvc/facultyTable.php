<?php
require_once'facultyDDatabase.php';
class FacultyTable{
    private $dbConnection;
    public function __construct($dbConnection){
        $this->dbConnection = $dbConnection->conn;
        $this->createTable();
    }

    

}


?>