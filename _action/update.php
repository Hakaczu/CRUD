<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 30.12.2017
 * Time: 19:16
 */
require_once "../_db/db_operations.php";
require_once "../_view/console_logs.php";
$update = new db_operations();
$post = $_POST;
$table = $post['table'];
$id = $post['id'];
unset($post['table']);
unset($post['id']);
$update ->update($table ,$id , $post);
header("Location: ../index.php?action=view&notice=update");