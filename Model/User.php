<?php
require_once('../Library/Model/Model.php');

class User extends Model {
    private $model = null , $table = 'users';
    
    public function __construct()
    {
        $model = Model::class;
        $this->set_table($this->table);
    }
}
?>