<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 28.12.2017
 * Time: 23:23
 */
require_once "../_db/db_operations.php";
require_once "../_view/console_logs.php";
$create = new db_operations();
$post = $_POST;
$table = $post['table'];
unset($post['table']);
$create ->create($table, $post);
header("Location: ../index.php?action=view&notice=create");
