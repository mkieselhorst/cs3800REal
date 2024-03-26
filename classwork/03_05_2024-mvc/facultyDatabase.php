<?php
// establish connection to host and db
class FacultyDatabase {
    private $server = "localhost"; // local server name
    private $username = "root"; //default login
    private $password = ""; //password is blank by default
    private $database = "faculty_database"; //name of db in xampp

    public function getConnection() {
        $conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        // check connection and kill if error
        if ($conn->connect_error) {
            die("Connection to db failed: " . $conn->connect_error);
        }
        echo "Successfully connected to db";
        return $conn; // Return the connection object
    }
}

// To use the class and its method
$facultyDB = new FacultyDatabase(); // Create an instance of the class
$facultyDB->getConnection(); // Call the method on the object

?>