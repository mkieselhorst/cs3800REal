<?php
require_once 'facultyDatabase.php';
require_once 'FacultyTable.php';

// Create an instance of FacultyDatabase and get the connection
$facultyDB = new FacultyDatabase();
$dbConnection = $facultyDB->getConnection(); // This now correctly returns a mysqli object

// Pass the connection to FacultyTable and create the table
$facultyTable = new FacultyTable($dbConnection);

?>