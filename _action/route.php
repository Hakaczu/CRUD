<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 28.12.2017
 * Time: 22:28
 */

if ($_SERVER["SCRIPT_FILENAME"]==str_replace('\\','/',__FILE__)) exit;
if(!empty($_GET)){

    switch ($_GET['action']){
        case "add":
            include "_layout/create_form.html";
            break;
        case "view":
            include "_action/read.php";
            break;
        case "edit":
            include '_layout/update_form.php';
            break;
        case 'delete':
            include '_action/delete.php';
            break;
        default:
            echo "<h2 class='text-center'>Page Not Found Sorry</h2><br/><a href='index.php'><h4 class=\"text-center\">Home Page</h4></a>";
            break;
    }
}else{
    include "_layout/home.html";
}

