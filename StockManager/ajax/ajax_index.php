<!-- includes ajax into the script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        /*
         * loads headeer at header section of index.php
        */

        $.ajax({
            url: './index/header.php',
            type: 'post',
            success: function(result)   {
                $("#header").html(result);
            }
        });

        /*
         * loads footer at footer section of index.php
        */
       
        $.ajax({
            url: './index/footer.php',
            type: 'post',
            success: function(result)   {
                $("#footer").html(result);
            }
        });
    });

</script>