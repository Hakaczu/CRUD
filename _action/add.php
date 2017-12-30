<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 28.12.2017
 * Time: 23:23
 */
include "../_db/db_operations.php";
include "../_view/console_logs.php";
$add = new db_operations();
$post = $_POST;
echo '<pre>';
print_r($post);
echo '</pre>';
$table = $post['table'];
unset($post['table']);
$add ->add($table, $post);
header("Location: ../index.php?action=view");