<?php
require './Model/User.php';

class UserController{
    private $user , $user_id , $id , $id_del , $is_admin;
    private $email_login , $password_login , $password_confirmation;
    public $data_l , $data_signup , $data_update;

    public function __construct(){
        $this->user = new User();

        if($_POST['status-edit'] == "true")
            $this->is_admin = "t";
        else
            $this->is_admin = "f";

        $this->data_update = array(
            'name'=>$_POST['name-edit'],
            'email'=>$_POST['email-edit'],
            'password'=>$_POST['password-edit'],
            'phone'=>$_POST['phone-edit'],
            'is_admin'=>$this->is_admin
        );

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
        $this->id = $_POST['id'];
        $this->id_del = $_POST['id-del'];
    }

    public function read_users(){
        $users = $this->user->read_all();
        include './View/Adm/user.php';
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

    public function delete_user(){
        $this->user->delete($this->id_del);
        header("Location: /users");
    }

    public function edit_user(){
        $this->user->update($this->id , $this->data_update);
        header("Location: /users");
    }
}

?>