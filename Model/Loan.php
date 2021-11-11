<?php
require_once('../Library/Model/Model.php');

class Loan extends Model {
    private $model = null , $table = 'loans';

    public function __construct(){
        $model = Model::class;
        $this->set_table($this->table);
    }
}
?>