<?php
session_start();
abstract class Model{
    private $table = null , $tableid , $dbconnection = null;

    private $host = 'localhost';
    private $dbname = 'postgres';
    private $user = 'postgres';
    private $pass = 'postgres';
    private $port = '5432';
    
    private function database_connect(){
        $this->dbconnection = pg_connect(
            "host=$this->host " .
            "port=$this->port " .
            "dbname=$this->dbname " .
            "user=$this->user " .
            "password=$this->pass"
        );
    }

    public function set_table(string $_table){
        $this->table = $_table;
    }

    public function disconnect(){
        pg_close($this->dbconnection);
    }

    public function create(array $data){
        $this->database_connect();
        return pg_insert($this->dbconnection , $this->table , $data);
    }

    public function read(int $id){
        $this->database_connect();
        $this->tableid = $id;
        $result = pg_query($this->dbconnection, 
        "SELECT * FROM $this->table where id=$id");
        $this->disconnect();
        return (pg_fetch_all($result)[0]);
    }

    public function update(int $id , array $data){
        $this->database_connect();
        return pg_update($this->dbconnection , $this->table , $data , ['id' => $id]);
    }

    public function delete(int $id){
        $this->database_connect();
        return pg_delete($this->dbconnection , $this->table , ['id' => $id]);
    }

    public function read_all(){
        $this->database_connect();
        $result = pg_query($this->dbconnection, "SELECT * FROM $this->table ORDER BY ID");
        $this->disconnect();
        return (pg_fetch_all($result));
    }

    public function authentication(string $email, string $password){
        $this->database_connect();
        $adm_bool = false;
        $result = pg_query($this->dbconnection, "SELECT * FROM $this->table WHERE email='$email' AND password='$password'");
        if(pg_num_rows($result)){
            $data = pg_fetch_all($result);
            $_SESSION['id-login'] = $data[0]['id'];
            $_SESSION['name-login'] = $data[0]['name'];
            $_SESSION['password-login'] = $data[0]['password'];
            $_SESSION['email-login'] = $data[0]['email'];
            $_SESSION['fone-login'] = $data[0]['phone'];
            if($data[0]['is_admin'])
                $adm_bool = true;
            $_SESSION['adm-login'] = $data[0]['is_admin'];
        }
        $this->disconnect();
        return $adm_bool;
    }

    public function read_loan(){
        $this->database_connect();
        $result = pg_query($this->dbconnection, "SELECT * FROM $this->table WHERE status='available' ORDER BY ID");
        $this->disconnect();
        return (pg_fetch_all($result));
    }
}
?>