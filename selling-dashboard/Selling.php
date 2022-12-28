<div class="d-flex justify-content-between">
    <h1>Point Of Sale System</h1>
    <div>
        <strong>Total Sales</strong>
        <?php   foreach ($data->transactions as $transaction) : ?>
        <span id="total-sales"><?= $transaction->total
        ?></span>
        <?php  endforeach; ?>
    </div>
</div>
<hr>

<form id="userInputContainer" class="my-4 d-flex justify-content-between  gap-3 w-50">
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Items</span>
        <select id="items" class="form-select" name="select_items" aria-label="Default select example">
            <?php foreach ($data->items as $item) :
                if ($item->stock_available <= 0)
                    continue;
            ?>
                <option value="<?= $item->id ?>" data-price="<?= $item->price ?>"><?= $item->item_name ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="input-group flex-nowrap">
        <span class="input-group-text">Quantity</span>
        <input id="stock" type="number" name="stock_available" class="form-control" min="0">
    </div>
    <button id="add-item" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
</form>
<div id="table">
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody id="tbody" class="text-center">

            <?php foreach ($data->transactions as $transaction) : ?>
                <tr>
                    <td><?= $item->item_name  ?> </td>
                    <td><?= $transaction->quantity ?></td>
                    <td><?= $transaction->total ?></td>
                    <td><a href="/sellings/edit?id=<?//= $data->transaction->id 
                                                        ?>" class="btn btn-warning"> <i class="fa-solid fa-pen"></i> </a></td>
                    <td><a href="/sellings/delete?id=<?//= $data->transaction->id?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> </a></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
<script>
    $('#add-item').click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "http://store.local/api/transaction/create",
            data: JSON.stringify({
                "item_id": $('#items').find(':selected').val(),
                "quantity": $('#stock').val(),
               // "total_sales": $('#total-sales').val(),
              
            }),
            success: function(response) {
                response.body.forEach(element => {
                    $('#tbody').append(`
                    <span> ${element.total_sales} </span>
                    <tr>
                 <td>${element.item_id}</td>
                  <td>${element.quantity}</td>
                      </tr>
                    `);

                });
            }
        });

    });
</script>