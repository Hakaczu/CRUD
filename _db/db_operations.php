<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 25.12.2017
 * Time: 23:25
 */
require_once 'db_connect.php';
class db_operations extends db_connect {
    public $pharmacy = "pharmacy";

    private function get_columns($table){
        $con = $this->_connection;
        $query = $con->query("SELECT * FROM " . $table);
        $total_col = $query->columnCount();

        for ($col = 0; $col < $total_col; $col++) {
            $meta = $query->getColumnMeta($col);
            $columns[] = $meta['name'];
        }
        return $columns;
    }

    private function prepare_set($table){
        $columns = $this->get_columns($table);
        $set = " SET ";
        for ($col = 1; $col < count($columns); $col++){
            $set .=$columns[$col]."=:".$columns[$col];
            if($col != count($columns)-1) {
                $set .= ", ";
            }
        }
        console_logs::display($set);
        return $set;
    }

    public function add ($table, $data){
        echo '<pre>';
print_r($_POST);
echo '</pre>';
        $query = $this->_connection->prepare("INSERT INTO ".$this->$table.$this->prepare_set($this->$table));
        $insert = $query -> execute($data);
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
        if (count($result)>0){
            console_logs::display("Found: ".count($result)." row(s) in ".$this->$table." table");
        }else
            console_logs::display("Not Found Rows in ".$this->$table." table");
        print_data::print_table($this->get_columns($this->$table),$result);
    }
}

