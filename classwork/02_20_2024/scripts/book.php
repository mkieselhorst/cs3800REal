<!-- title, isbn, year, author -->
<?php
    class Book{
        private $title;
        private $isbn;
        private $year;
        private $author;


        // set variables using constructor
        public function __construct($title="", $isbn="", $year="", $author="") {
            $this->title = $title;
            $this->isbn = $isbn;
            $this->year = $year;
            $this->author = $author;
            
        }


        // getters
        public function getTitle(){
            return $this -> title;

        }
        public function getIsbn(){
            return $this -> isbn;
            
        }
        public function getYear(){
            return $this -> year;
            
        }
        public function getAuthor(){
            return $this -> author;
            
        }


        // setters
        public function setTitle($title){
            return $this -> title;

        }
        public function setIsbn($isbn){
            return $this -> isbn;
            
        }
        public function setYear($year){
            return $this -> year;
            
        }
        public function setAuthor($author){
            return $this -> author;
            
        }


        // display
        function display(){
            echo "Title: " . $this->title . "<br/>";
            echo "Isbn: " . $this->isbn . "<br/>";
            echo "Year: " . $this->year . "<br/>";
            echo "Author: " . $this->author . "<br/>";
        }

    }

?>