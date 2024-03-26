<?php
require_once'facultyDatabase.php';
class FacultyTable{
    private $dbConnection;


    // main constructor to establish connection to the db and server
    public function __construct($dbConnection){
        $this->dbConnection = $dbConnection->conn;
        $this->createTable();
    }

    private function createTable(){
        
        
        $sql = "CREATE TABLE IF NOT EXISTS professors (
                ID INT AUTO_INCREMENT PRIMARY KEY, 
                NAME VARCHAR(255) NOT NULL, 
                DEPARTMENT VARCHAR(255) NOT NULL)";

        
    
            if(!$this->dbConnection->query($sql)){
                echo "Error: creating table FacultyTable failed" . $this->dbConnection->error;
            }   
            
            
        
    }
}


?>