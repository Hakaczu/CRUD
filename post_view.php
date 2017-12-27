<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 27.12.2017
 * Time: 21:16
 */
echo '<pre>';
print_r($_POST);
echo '</pre>';
include '_inc/db_operations.php';
$add = new db_operations;
$add ->add('pharmacy');