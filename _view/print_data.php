<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 28.12.2017
 * Time: 16:44
 */
class print_data{
    public static function alert_message($txt,$type){
        $w = '<div class="alert alert-' . $type . ' alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $txt . '</div>';
        return $w;
    }

    public static function alert($notice){
        switch($notice) {
            case 'create':
                $w = self::alert_message('Record Added','success');
                break;
            case 'update':
                $w = self::alert_message('Record Edited', 'warning');
                break;
            case 'delete':
                $w = self::alert_message('Record Deleted', 'danger');
                break;
            case 'nexist':
                $w = self::alert_message('Record Does Not Exist', 'danger');
                break;
            default:
                $w ='';
                break;
        }
        return $w;
    }

    public static function print_table($table, $columns, $data){
        if(isset($_GET['notice'])){
            $w=self::alert($_GET['notice']);
        }else{
            $w='';
        }

        $w .= '<h1>'.$table.'</h1>';
        $w .=
        '<table class="table table-hover table-striped table-bordered">
         <thead>
         <tr>';

        for($i = 0; $i<count($columns); $i++){
            $w .= '<th>'.$columns[$i].'</th>';
        }
        $w .= '<th>actions</th>';
        $w .=
        '</tr>
        </thead>
        <tbody>';

        for ($row = 0; $row<count($data); $row++)
        {
            $w .= "<tr>";
            foreach ($columns as $column)
            {
                $w .= '<td>'.$data[$row][$column].'</td>';

            }
            $w .= '<td><a href="index.php?action=edit&id='.$data[$row]['id'].'&table='.$table.'">Edit</a> 
            | <a href="#myModal" data-toggle="modal">Delete</a></td>';
            $w .= '</tr>';
        }
        $w .=
        '</tbody>
        </table>';
        return $w;
    }

}