<?php
    $servername = "localhost";
    $username= "root";
    $password = "";
    $dbname = "demodb_03_19_2024";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("connection failed:  " . mysqli_connect_error());
    }else{
        echo("You are Connected successfully <br />");
    };

    $tblCourse      = "CREATE TABLE IF NOT EXISTS Courses(courseId INT AUTO_INCREMENT PRIMARY KEY, 
                                            courseName VARCHAR(255) NOT NULL)";
                                            
    $tblStudents    = "CREATE TABLE IF NOT EXISTS Students(studentId INT AUTO_INCREMENT PRIMARY KEY, 
                                            firstName VARCHAR(255) NOT NULL,
                                            lastName VARCHAR(255) NOT NULL,
                                            major VARCHAR(255) NOT NULL)";

    $tblEnrollments = "CREATE TABLE IF NOT EXISTS Enrollments(enrollmentId INT AUTO_INCREMENT PRIMARY KEY, 
                                                courseId INT,
                                                studentId INT,
                                                FOREIGN KEY (courseId) REFERENCES Courses(courseId), 
                                                FOREIGN KEY (studentId) REFERENCES Students(studentId))";

if(mysqli_query($conn, $tblCourse)){
    echo(" Course Table created or already eists, ");
}else{
    echo(" Error, could not create or find table Courses, ");
};

if(mysqli_query($conn, $tblStudents)){
    echo(" Students Table created or already eists, ");
}else{
    echo(" Error, could not create or find table Students, ");
};


if(mysqli_query($conn, $tblEnrollments)){
    echo(" Enrollments Table created or already eists, ");
}else{
    echo(" Error, could not create or find table Enrollments, ");
};


