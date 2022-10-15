<script>
    $("#product_find").keyup(function(){
        $.ajax({
            url: './others/sql.php',
            type: 'post',
            data: {
                search: "true",
                table_name: "testdb",
                column: "name",
                value: $("#product_find").val(),
            },
            success: function(result)   {
                console.log(result);
                $("#table_data").html(result);
            }
        });
    });
</script>

<?php require "./../others/sql.php" ?>


<div class="container">
    <div class="row">
        <div class="col-12">
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">S.no</th>
                <th scope="col">Item</th>
                <th scope="col">Category</th>
                <th scope="col">Selling Price</th>
                <th scope="col">Edit</th>
                </tr>
            </thead>

            <tbody id="table_data">
                <?php get("testdb"); ?>
            </tbody>
        </table>
        </div>
    </div>
</div>