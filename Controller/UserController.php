<?php
require './Model/User.php';
session_start();
class UserController{
    private $user , $user_id;
    private $email_login , $password_login;
    private $data_l , $data_signup;
    private $password_confirmation;

    public function __construct(){
        $this->user = new User();
        $this->data_l = array(
            'name'=>$_POST['name-login'],
            'email'=>$_POST['email-login'],
            'password'=>$_POST['password-login'],
            'phone'=>$_POST['fone-login'],
            'is_admin'=>(!!$_POST['adm-login']),
        );

        $this->data_signup = array(
            'name'=>$_POST['name-signup'],
            'email'=>$_POST['email-signup'],
            'password'=>$_POST['password-signup'],
            'phone'=>$_POST['phone-signup'],
            'is_admin'=>"f"
        );
        $this->password_confirmation = $_POST['password-confirm-signup'];

        $this->user_id = $_POST['id-login'];
        $this->email_login = $_POST['email'];
        $this->password_login = $_POST['password'];
    }

    public function login(){
        $user = $this->user->authentication($this->email_login,$this->password_login);
        switch($user){
            case true:
                $_SESSION['login'] = "t";
                header("location: /books");
                break;
            case false:
                $_SESSION['login'] = "f";
                header("location: /books");
                break;
            default:
                header("location: /");
                break;
        }
    }

    public function signup(){
        if(
            strlen($this->data_signup['name']) > 2 and
            strlen($this->data_signup['email']) > 6 and
            strlen($this->data_signup['password']) > 5 and
            strlen($this->data_signup['phone']) > 7
        ){
            $this->user->create($this->data_signup);
            header("location: /");
        }
    }

    public function end_session(){
        unset($_SESSION["login"]);
        header("location: /");
    }
}

?>