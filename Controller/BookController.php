<?php
require './Model/Book.php';
session_start();
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
}
