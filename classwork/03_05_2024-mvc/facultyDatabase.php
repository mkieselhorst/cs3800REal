<?php
// establish connection to host and db
    private $server = "localhost"; // local server name
    private $username = "root"; //default login
    private $password = ""; //password is blank by def
    private $database = "faculty_database"; //name of db in xampp

    public function getConnection(){
        $conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        if($conn->connect_error){
            die("Connection to db failed")
        }
        else{
        
        }
    }






?>