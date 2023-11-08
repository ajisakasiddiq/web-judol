<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Item</th>
            <th scope="col">total</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        ShowTableOrder(OrderShow::select());
        ?>
    </tbody>
</table>