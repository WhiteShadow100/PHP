<?php

/*
*   if there is user id present in session login the use 
*   if id is not presetnt in session, dont let the user login
*/

    function user_login(){
        // Jeshan: Need to change this from !
        if(!empty($_SESSION["id"])){
            echo<<<LOGIN
                <script>
                    $(document).ready(function(){
                        $.ajax({
                            url: './index/login.php',
                            type: 'post',
                            success: function(result)   {
                                $("#root").html(result);
                            }
                        });
                    });
                </script>
            LOGIN;
                    }else{
            echo<<<WELCOME
                <script>
                    $(document).ready(function(){
                        $.ajax({
                            url: './main_page/welcome.php',
                            type: 'post',
                            success: function(result)   {
                                $("#root").html(result);
                            }
                        });
                    });
                </script>
            WELCOME;
        }
    }

/*
*   Validate user login with the database
*   assign the level of authority that a user has according to database
*/

    // function validate_user(){
        
    // }
?>