<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 28.12.2017
 * Time: 22:28
 */

if(!empty($_GET)){

    switch ($_GET['action']){
        case "add":
            include "_layout/form_pharmacy.php";
            break;
        case "view":
            include "_action/view.php";
            break;


        default:
            echo "<h2 class='text-center'>Page Not Found Sorry</h2><br/><a href='index.php'><h4 class=\"text-center\">Home Page</h4></a>";
    }
}else{
    include "_layout/buttons.php";
}

