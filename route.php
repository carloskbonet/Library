<?php

$request =  $_SERVER['REQUEST_URI'];
require __DIR__ . '/Controller/BookController.php';
require __DIR__ . '/Controller/UserController.php';
require __DIR__ . '/Controller/LoanController.php';

if (!$_SESSION['login']) {
    switch ($request) {
        case '/':
            require './View/index.php';
            break;
        case '/login':
            (new UserController())->login();
            break;
        case '/store-signup':
            include './View/Create/register.php';
            break;
        case '/signup':
            (new UserController())->signup();
            break;
        default:
            header("location: /");
            break;
    }
} else {
    if ($_SESSION['login'] == "t") {
        switch ($request) {
            case '/books':
                (new BookController())->read_books_admin();
                break;
            case '/historic':
                (new LoanController())->read_books_historic_admin();
                break;
            case '/loan':
                (new LoanController())->read_books_loan_admin();
                break;
            case '/users':
                (new UserController())->read_users_admin();
                break;
            case '/create-book':
                (new BookController())->create_book();
                break;
            case '/delete-book':
                (new BookController())->delete_book();
                break;
            case '/edit-book':
                (new BookController())->edit_book();
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
            case '/edit-user':
                (new UserController())->edit_user();
                break;
            case '/delete-user':
                (new UserController())->delete_user();
                break;
            case '/store-user':
                include './View/Adm/Create/register.php';
                break;
            default:
                header("Location: /books");
                break;
        }
    } else {
        switch ($request) {
            case '/books':
                (new BookController())->read_books();
                break;
            case '/loan':
                (new LoanController())->read_books_loan();
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
