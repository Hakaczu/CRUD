<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 30.12.2017
 * Time: 20:46
 */

$delete = new db_operations();
$id = $_GET['id'];
$table = $_GET['table'];
$delete ->delete($table,$id);
header("Location: index.php?action=view&notice=delete");