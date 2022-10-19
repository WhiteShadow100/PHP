<?php
    session_start();

    require "others/database.php";
    require "./ajax/ajax_index.php";
    require "./php_function/fun_index.php";
?>

<html>
    <head>
        <title>Sales</title>

        <!-- For Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="./js_functions/change_class.js"></script>

        <?php
            user_login();
        ?>

    </head>

    <body>

        <div id="header">
        </div>

        <div id="root">

        </div>

        <div id="footer">
        </div>
    </body>
</html>