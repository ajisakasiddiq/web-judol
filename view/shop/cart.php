<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Item</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        ShowTableCart(CartShow::select());
        ?>
    </tbody>
</table>