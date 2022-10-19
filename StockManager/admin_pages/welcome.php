<script>
    // gets the content of the defined page and place it in id = main_display
    function goto_page(page_name, element){
        var buttons = document.getElementsByClassName("list-group-item");
        for (let i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove("active");
        }
        element.classList.add("active");
        $.ajax({
            url: "./menu_items/"+page_name+".php",
            type: 'post',
            success: function(result)   {
                $("#main_display").html(result);
            }
        });
    }
</script>


<div id="main_body" class='pt-3 pb-3'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 m-0 p-0" id="option">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action" onclick="goto_page('products', this)">Products</button>
                    <button type="button" class="list-group-item list-group-item-action" onclick="goto_page('categories', this)">Category</button>
                    <button type="button" class="list-group-item list-group-item-action" onclick="goto_page('sales', this)">Sales</button>
                    <button type="button" class="list-group-item list-group-item-action" onclick="goto_page('sales_history', this)">Sales History</button>
                </div>
            </div>

            <div class="col-9" id="main_display">
                <h1>Welcome</h1>
            </div>
        </div>
    </div>
</div>