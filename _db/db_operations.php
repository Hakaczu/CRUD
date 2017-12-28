<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 25.12.2017
 * Time: 23:25
 */
include 'db_connect.php';
class db_operations extends db_connect {
    public $pharmacy = "pharmacy";

    private function get_columns($table){
        $con = $this->_connection;
        $query = $con->query("SELECT * FROM " . $table);
        $total_col = $query->columnCount();

        for ($i = 0; $i < $total_col; $i++) {
            $meta = $query->getColumnMeta($i);
            $columns[] = $meta['name'];
        }
        return $columns;
    }

    private function prepare_set($table){
        $columns = $this->get_columns($table);
        $set = " SET ";
        for ($i = 1; $i < count($columns); $i++){
            $set .=$columns[$i]."=:".$columns[$i];
            if($i != count($columns)-1){
                $set .=", ";
            }
            else{
                $set .=";";
            }
        }
        console_logs::display($set);
        return $set;
    }

    public function add ($table){
        $query = $this->_connection->prepare("INSERT INTO ".$this->$table.$this->prepare_set($this->$table));
        $insert = $query -> execute($_POST);
        if($insert)
        {
            console_logs::display("PDO: Insert Success");
        }else{
            console_logs::display("PDO: Insert Failed");
        }
    }

    public function read ($table){
        $query = $this->_connection->prepare("SELECT * FROM ".$this->$table.";");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
//        echo '<pre>';
//        print_r($result);
//        echo '</pre>';
        print_data::print_table($this->get_columns($this->$table),$result);


    }
}

