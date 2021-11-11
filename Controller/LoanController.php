<?php
require './Model/Loan.php';

class LoanController{
    public $loan , $id , $data_loan;


    public function __construct(){
        $this->loan = new Loan();
        $this->id = $_POST['id-loan'];
        $date_start = date("Y-m-d H:i:s", time() + 3600*(date("I")));
        $date_devolution = date("Y-m-d H:i:s", strtotime($date_start. ' + 7 days'));
        $this->data_loan = array(
            "date_start"=>$date_start,
            "date_end"=>$date_devolution,
            "user_id"=>$_SESSION['id-login'],
            "book_id"=>$_POST['id-loan']
        );
    }

    public function read_books(){
        $loans = $this->loan->read_all_loan($_SESSION['id-login']);
        include './View/loan.php';
    }

    public function read_books_historic(){
        $loans = $this->loan->read_all_historic($_SESSION['id-login']);
        include './View/historic.php';
    }

    public function loan_book(){
        if($this->loan->read_loan(intval($this->id))){
            $data = array("status"=>'unavailable');
            $this->loan->create($this->data_loan);
            (new Book())->update($this->id , $data);
            header("Location: /loan");
        }
        else{
            header("Location: /books");
        }
    }

    public function return_book(){
        $data = array("deleted_at"=>date("Y-m-d H:i:s", time() + 3600*(date("I"))));
        $this->loan->update($_POST['id-devolution'] , $data);

        $data_book = array("status"=>'available');
        (new Book())->update($_POST['id-book'],$data_book);

        header("Location: /historic");
    }
}
