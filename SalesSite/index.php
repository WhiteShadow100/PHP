<?php
    session_start();

    require "others/database.php";
?>

<html>
    <head>
        <title>Sales</title>

        <!-- For Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- For Ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script>
            $(document).ready(function(){
                // For Header
                $.ajax({
                    url: 'header.php',
                    type: 'post',
                    success: function(result)   {
                        $("#header").html(result);
                    }
                });

                // For Footer
                $.ajax({
                    url: 'footer.php',
                    type: 'post',
                    success: function(result)   {
                        $("#footer").html(result);
                    }
                });
            });

        </script>

        <?php
        // Jeshan: Need to change this
        if(empty($_SESSION["id"])){
echo<<<LOGIN
        <script>
            $(document).ready(function(){
                $.ajax({
                    url: 'login.php',
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
                    url: './admin_pages/welcome.php',
                    type: 'post',
                    success: function(result)   {
                        $("#root").html(result);
                    }
                });
            });
        </script>
WELCOME;
        }
    ?>

    </head>

    <body>
<!-- Start -->
 
<!-- End -->
        <div id="header">
            <h1>Header</h1>
        </div>

        <div id="root">

        </div>

        <div id="footer">
            <h1>Footer</h1>
        </div>
    </body>
</html>