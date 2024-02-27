<?php
    class Student{
        private $name;
        private $email;
        private $phoneNumber;
        private $gender;
        private $other;
        private $status;
        private $major;
        private $interests;

        public function __construct($name="", $email="", $phoneNumber="", $gender="", $other="", $status="", $major="", $interests="") {
            $this->name = $name;
            $this->email = $email;
            $this->phoneNumber = $phoneNumber;
            $this->gender = $gender;
            $this->other = $other;
            $this->status = $status;
            $this->major = $major;
            $this->interests = $interests;
        }

        // Time for getters baby!!

        public function getName(){
            return $this -> name;
        }
        public function getEmail(){
            return $this -> email;
        }
        public function getPhone(){
            return $this -> phoneNumber;
        }
        public function getGender(){
            return $this -> gender;
        }
        public function getOther(){
            return $this -> other;
        }
        public function getStatus(){
            return $this -> status;
        }
        public function getMajor(){
            return $this -> major;
        }
        public function getInterests(){
            return implode(", ", $this -> interests);
        }

        // Setters Time

        public function setName($name){
            return $this -> name;
        }
        public function setEmail($email){
            return $this -> email;
        }
        public function setPhone($phoneNumber){
            return $this -> phoneNumber;
        }
        public function setGender($gender){
            return $this -> gender;
        }
        public function setOther($other){
            return $this -> other;
        }
        public function setStatus($status){
            return $this -> status;
        }
        public function setMajor($major){
            return $this -> major;
        }
        public function setInterests($interests){
            return $this -> interests;
        }
    }

    session_start();

    // instantiation WHO???

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $student = new Student($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['gender'], $_POST['other'], $_POST['status'], $_POST['major'], $_POST['interests']);
    
        $studentInfo = "Name: " . $student->getName() . "<br/>" .
        "Email: " . $student->getEmail() . "<br/>" . 
        "Phone: " . $student->getPhone() . "<br/>" . 
        "Gender: " . $student->getGender() . " " . $student->getOther() . "<br/>" .
        "Status: " . $student->getStatus() . "<br/>" . 
        "Major: " . $student->getMajor() . "<br/>" . 
        "Interests: " . $student->getInterests(). "<br/>";
    
    
        // store in sessin
    
        $_SESSION['Student_Info'] = $studentInfo;
    
        // header
        header('location: thankYou.php');
        
    }
?>