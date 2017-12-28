<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 27.12.2017
 * Time: 21:16
 */
//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
include '_db/db_operations.php';
include '_view/console_logs.php';
include '_view/print_data.php';
$add = new db_operations;
$add ->read("pharmacy");