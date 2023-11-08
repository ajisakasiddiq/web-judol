<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nama Item</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">harga</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php

        ShowTableItem(ItemShow::select());
        ?>
    </tbody>
</table>