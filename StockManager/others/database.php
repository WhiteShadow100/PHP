<?php

    // return con
    function connection(){
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "test";
    
        $con = new mysqli($server, $username, $password, $database);
    
        if(!$con){
            die("Unable to connect");
        }

        return $con;
    }

    function close_connection($db){
        $db->close();
    }

?>