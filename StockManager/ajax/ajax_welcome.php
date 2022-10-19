<script>
    $.ajax({
        url: "./menu_items/"+page_name+".php",
        type: 'post',
        success: function(result)   {
            $("#main_display").html(result);
        }
    });
</script>