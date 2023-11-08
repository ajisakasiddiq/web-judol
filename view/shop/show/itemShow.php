<div class="d-flex justify-content-center pt-3">
    <?php
    $item = $data['item'];
    if (count($item) > 0) {
    ?>
        <div class="col-sm-4">
            <div class="row mb-3">
                <label for="id" class="col-sm-2 col-form-label">Nama Item </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="idInput" value="<?= $item['nama_item'][0]; ?>" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Deskripsi </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nameInput" value="<?= $item['deskripsi'][0]; ?>" name="name" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <label for="emailInput" class="col-sm-2 col-form-label">Email: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="emailInput" value="<?= $item['harga'][0]; ?>" name="email" disabled>
                </div>
            </div>
        </div>
    <?php
    } else {
        titleheader('Data kosong!', 'h3', 'mt-5 pt-5');
    }
    ?>
</div>