<?php
require './Model/Book.php';

class BookController{
    public $book , $id;


    public function __construct(){
        $this->book = new Book();
        $this->id = $_POST['id'];
    }

    public function read_books(){
        $books = $this->book->read_all();
        include './View/books.php';
    }

    public function read_books_loan(){
        $books = $this->book->read_loan();
        include './View/loan.php';
    }
}
