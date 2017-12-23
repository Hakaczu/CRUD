<?php
class db_connect {
    private $_connection;
    private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_database = "pharmacy";

    public function __construct() {
        $this -> _connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

        if($this) {
            echo("<script>console.log('MySQL: Connect Successful');</script>");
        }
        else {
            echo("<script>console.log('MySQL: Connect Error');</script>");
        }
    }
}