<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 28.12.2017
 * Time: 23:07
 */

$read = new db_operations();
$view=$read->read('pharmacy');
echo $view;
include '_layout/modal.html';
