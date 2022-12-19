<div class="d-flex justify-content-between">
    <h1>HTU Store (POS) System</h1>
    <div>
        <strong>Total Sales</strong>
        <span id="total-sales">0</span>
    </div>
</div>
<hr>
<form id="userInputContainer" class="my-4 d-flex justify-content-between  gap-3 w-50">
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Items</span>
        <select id="items" class="form-select" aria-label="Default select example">
            <option selected id="items"></option>
            <!-- <input id="stock" name="stock_available" class="form-control" min="0"> -->
            <!-- <input id="price"  name="price" class="form-control" min="0"> -->
        </select>
    </div>
  <button id="quantity" type="button" class="btn btn-dark">Quantity</button>  <p id="stock" > </p>

  <button id="item-price" type="button" class="btn btn-dark">Price (JOD)</button>  <p id="price" > </p>




<!--  
     <div class="input-group flex-nowrap" >
      <span class="input-group-text" >Quantity</span>
        <div  id="quantity">
        <input id="stock" name="stock_available" class="form-control" min="0">
        </div>
    </div> -->

    <!-- <div class="input-group flex-nowrap">
        <span class="input-group-text" >Price (JOD)</span>
        <div id="item-price">
        <input id="price"  name="price" class="form-control" min="0">
        </div>
    </div>  -->

    
    <button id="add-item" class="btn btn-success">Add</button>

</form>



<div id="dataTableContainer">


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Item</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price Per Unit</th>
                <th scope="col">Total</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
<script>
   
    $('#items').click(function() {
        $.ajax({
            type: "get",
            url: "http://store.local/api/items",
            success: function(response) {
                response.body.forEach(element => {
                    $('#items').append(`
                 <option>${element.item_name} </option> 
              
                    
                  
                    `);
                });
                
            }
        });
    });
    
    $('#quantity').click(function() {
        $.ajax({
            type: "get",
            url: "http://store.local/api/items",
            success: function(response) {
                response.body.forEach(element => {
                    $('#stock').append(`
                    ${element.stock_available} 
                    `);
                });
                
            }
        });
    });
    



    $('#item-price').click(function() {
        $.ajax({
            type: "get",
            url: "http://store.local/api/items",
            success: function(response) {
                response.body.forEach(element => {
                    $('#price').append(`
                   ${element.price}
                 
                    `);
                });
                
            }
        });
    });


</script><div class="d-flex justify-content-between">
    <h1>HTU Store (POS) System</h1>
    <div>
        <strong>Total Sales</strong>
        <span id="total-sales">0</span>
    </div>
</div>
<hr>
<form id="userInputContainer" class="my-4 d-flex justify-content-between  gap-3 w-50">
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Items</span>
        <select id="items" class="form-select" aria-label="Default select example">
            <option selected id="items"></option>
            <!-- <input id="stock" name="stock_available" class="form-control" min="0"> -->
            <!-- <input id="price"  name="price" class="form-control" min="0"> -->
        </select>
    </div>
  <button id="quantity" type="button" class="btn btn-dark">Quantity</button>  <p id="stock" > </p>

  <button id="item-price" type="button" class="btn btn-dark">Price (JOD)</button>  <p id="price" > </p>




<!--  
     <div class="input-group flex-nowrap" >
      <span class="input-group-text" >Quantity</span>
        <div  id="quantity">
        <input id="stock" name="stock_available" class="form-control" min="0">
        </div>
    </div> -->

    <!-- <div class="input-group flex-nowrap">
        <span class="input-group-text" >Price (JOD)</span>
        <div id="item-price">
        <input id="price"  name="price" class="form-control" min="0">
        </div>
    </div>  -->

    
    <button id="add-item" class="btn btn-success">Add</button>

</form>



<div id="dataTableContainer">


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Item</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price Per Unit</th>
                <th scope="col">Total</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
<script>
   
    $('#items').click(function() {
        $.ajax({
            type: "get",
            url: "http://store.local/api/items",
            success: function(response) {
                response.body.forEach(element => {
                    $('#items').append(`
                 <option>${element.item_name} </option> 
              
                    
                  
                    `);
                });
                
            }
        });
    });
    
    $('#quantity').click(function() {
        $.ajax({
            type: "get",
            url: "http://store.local/api/items",
            success: function(response) {
                response.body.forEach(element => {
                    $('#stock').append(`
                    ${element.stock_available} 
                    `);
                });
                
            }
        });
    });
    



    $('#item-price').click(function() {
        $.ajax({
            type: "get",
            url: "http://store.local/api/items",
            success: function(response) {
                response.body.forEach(element => {
                    $('#price').append(`
                   ${element.price}
                 
                    `);
                });
                
            }
        });
    });


</script>