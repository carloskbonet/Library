<?php
require_once('../Library/Model/Model.php');

class Book extends Model {
    private $model = null , $table = 'books';

    public function __construct(){
        $model = Model::class;
        $this->set_table($this->table);
    }
}
?>