<?php
// path to facultyDatabase.php
require_once'facultyDatabase.php';
class FacultyCreator{
    private $dbConnection;
    public function __construct($dbConnection){
        $this->dbConnection = $dbConnection->conn;
        $this->createDatabase();
    }




    private function createDatabase(){

    }
};



?>