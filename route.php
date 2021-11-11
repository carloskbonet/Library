<?php

$request =  $_SERVER['REQUEST_URI'];
require __DIR__ . '/Controller/BookController.php';
require __DIR__ . '/Controller/UserController.php';
require __DIR__ . '/Controller/LoanController.php';

if (isset($_SESSION['login'])) {
    switch ($request) {
        case '/':
            require './View/index.php';
            break;
        case '/login':
            (new UserController())->login();
            break;
        case '/signup':
            (new UserController())->signup();
            break;
        default:
            header("location: /");
            break;
    }
} else {
    if($_SESSION['login'] == "admin"){
        switch($request){
            default:
                header("Location: /Testes");
                break;
        }
    }else{
        switch ($request) {
            case '/books':
                (new BookController())->read_books();
                break;
            case '/loan':
                (new LoanController())->read_books();
                break;
            case '/historic':
                (new LoanController())->read_books_historic();
                break;
            case '/disconnect':
                (new UserController())->end_session();
                break;
            case '/loan-book':
                (new LoanController())->loan_book();
                break;
            case '/loan-return':
                (new LoanController())->return_book();
                break;
            default:
                header("location: /books");
                break;
        }
    }
}
