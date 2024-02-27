<?php
include 'book.php';
session_start();

// instantiate
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $book = new book($_POST['title'], $_POST['isbn'], $_POST['year'], $_POST['author']);

    // test out using print method in book class
    // $book -> display();

    
    $bookDetails = "Title: " . $book->getTitle() . "<br/>" .
    "Year: " . $book->getYear() . "<br/>" . 
    "Isbn: " . $book->getIsbn() . "<br/>" . 
    "Author: " . $book->getAuthor() . "<br/>";


    // store in sessin

    $_SESSION['book_details'] = $bookDetails;

    // header
    header('location: thankYou.php');
    
}


// Redirect to ty.php






?>