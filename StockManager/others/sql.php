<?php
    require "./../others/database.php";
    require "./../others/make_table.php";

    $db = connection();

    function custom_search($table_name, $column, $value){
        global $db;
        $sql = "select * from $table_name where $column = '$value'";
        $result = $db->query($sql);
        $table = make_table($result);
        return $table;
    }

    function get($table_name){
        global $db;
        $sql = "select * from $table_name";
        $result = $db->query($sql);
        $table = make_table($result);
        echo $table;
    }

    if(!empty($_POST)){
        if(isset($_POST["search"])){
            echo custom_search($_POST["table_name"], $_POST["column"], $_POST["value"]);
        }
    }
?>