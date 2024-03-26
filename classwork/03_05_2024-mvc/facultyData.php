<?php
    require_once 'facultyDatabase.php';

    class FacultyData{
        private $dbConnection;
        // establish connection to server and existing table
        public function __construct($dbConnection){
            $this->dbConnection = $dbConnection;
            $this->createTable();
        }





        public function insertProfessor($name, $department){
            $stmt = $this->dbConnection->prepare( "INSERT INTO professors(NAME, DEPARTMENT) VALUES(?, ?)");

            if (!$stmt) {
                echo "Error preparing statement: " . $this->dbConnection->error;
                return;
            }

            $stmt->bind_param("ss", $name,$department);

            if (!$stmt->execute()) {
                echo "Error executing statement: " . $stmt->error;
            } else {
                echo "Record inserted successfully.";
            }

            $stmt->close();
        }
        
    };




    class dataViewer{
        private $dbConnection;
        public function __construct($dbConnection){
            $this->dbConnection = $dbConnection;
            $this->createTable();
        }
        function displayAll(){

        
            $result= $this->dbConnection->query("SELECT * FROM professors");
            if($result->num_rows > 0 ){
                
            
            echo"<table><tr><th>Name</th><th>Department</th></tr>";
            while($row = $result -> fetch_assoc()){
                echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['NAME'] . "</td><td>" . $row['DEPARTMENT'] . "</td></tr>";
            }//while
            echo"</table>";
            }//if
            else{
                echo " no connection to table";
            }
        }//func
    }//class



?>