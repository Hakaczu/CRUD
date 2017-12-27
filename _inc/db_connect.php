<?php
class db_connect {
    protected $_connection;
    private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_database = "pharmacy";
    private $_sqll = "mysql";

    public function __construct() {
        $this ->_connection = new PDO("$this->_sqll:host=$this->_host;dbname=$this->_database",$this->_username,$this->_password);
        $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($this->_connection) {
            console_logs::display("MySQL: Connect Successful");
        }
        else {
            console_logs::display("MySQL: Connect Successful");
        }
    }
}