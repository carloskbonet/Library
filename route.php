<?php

$request =  $_SERVER['REQUEST_URI'];
require __DIR__. '/Controller/BookController.php';
require __DIR__. '/Controller/UserController.php';

if(!$_SESSION['login']){
    switch($request) {
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
}
else{
    switch($request){
        case '/books':
            (new BookController())->read_books();
            break;
        case '/loan':
            (new BookController())->read_books_loan();
            break;
        case '/historic':
            include './View/historic.php';
            break;
        case '/disconnect':
            (new UserController())->end_session();
            break;
        default:
            header("location: /books");
            break;
    }
}

?>