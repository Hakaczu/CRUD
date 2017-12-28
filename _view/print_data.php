<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 28.12.2017
 * Time: 16:44
 */
class print_data{

    public static function print_table($columns, $data){
        echo
        "<table class=\"table table-bordered\">
         <thead>
         <tr>";

        for($i = 0; $i<count($columns); $i++){
            echo "<th>".$columns[$i]."</th>";
        }

        echo
        "</tr>
        </thead>
        <tbody>\n";

        for ($row = 0; $row<count($data); $row++)
        {
            echo "<tr>";
            foreach ($columns as $column)
            {
                echo "\n\t<td>".$data[$row][$column]."</td>\n";

            }

            echo "</tr>\n";
        }
        echo
        "</tbody>
        </table>";


    }

}