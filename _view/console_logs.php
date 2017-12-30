<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 25.12.2017
 * Time: 23:55
 */
 class console_logs {
   static function display($txt){
       echo "\n\t";
       echo '<script>console.log("'.$txt.'")</script>';
       echo "\n";
   }
}