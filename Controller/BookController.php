<?php
require './Model/Book.php';
session_start();
class BookController{
    public $book , $id , $data_create , $data_update;
    public $id_del;


    public function __construct(){
        $this->book = new Book();
        $this->id = $_POST['id'];
        $this->id_del = $_POST['id-del'];

        $this->data_create = array(
            "name"=>$_POST['name'],
            "description"=>$_POST['description'],
            "author"=>$_POST['author'],
            "category"=>$_POST['category'],
            "status"=>$_POST['status'],
            "quantity"=>1
        );

        $this->data_update = array(
            "name"=>$_POST['name-edit'],
            "description"=>$_POST['description-edit'],
            "author"=>$_POST['author-edit'],
            "category"=>$_POST['category-edit'],
            "status"=>$_POST['status-edit'],
        );
    }

    public function read_books(){
        $books = $this->book->read_all();
        include './View/books.php';
    }

    public function read_books_admin(){
        $books = $this->book->read_all();
        include './View/Adm/books.php';
    }

    public function delete_book(){
        $this->book->delete($this->id_del);
        header("Location: /adm/books");
    }

    public function create_book(){
        $this->book->create($this->data_create);
        header("Location: /adm/books");
    }

    public function edit_book(){
        $this->book->update($this->id , $this->data_update);
        header("Location: /adm/books");
    }
}
