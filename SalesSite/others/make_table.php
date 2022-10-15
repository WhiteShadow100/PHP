<?php
    function make_table($data){
        $html = "";
        while($row=$data->fetch_assoc()){
            $html .= "<tr>";
            foreach($row as $col){
                $html .= "<td>.$col.</td>";
            }
            $html .= "<td><input type='button' class='btn btn-warning' value='Edit' /></td>";
            $html .= "<td><input type='button' class='btn btn-danger' value='Delete' /></td>";
            $html .= "</tr>";
        }

        return $html;
    }
?>