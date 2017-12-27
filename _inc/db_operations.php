<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 25.12.2017
 * Time: 23:25
 */
include "db_connect.php";
include "console_logs.php";
class db_operations extends db_connect {
    public $pharmacy = "pharmacy";
    private function prepare_set($table){
        $con = $this->_connection;
        $query = $con -> query("SELECT * FROM ".$table);
        $total_col = $query ->columnCount();
        var_dump($total_col);

        for ($i = 0; $i < $total_col; $i++) {
            $meta = $query -> getColumnMeta($i);
            $columns[] = $meta['name'];
        }
        
        $set = " SET ";
        for ($i = 1; $i < count($columns); $i++){
            $set .=$columns[$i]."=:".$columns[$i];
            if($i != count($columns)-1){
                $set .=", ";
            }
        }
        console_logs::display($set);
        return $set;
    }

    public function add ($table){
        $sql = $this->_connection->prepare("INSERT INTO ".$this->$table.$this->prepare_set($this->$table));
        $sql -> execute($_POST);
    }
}

