<div>
<form action="<?= BASEURL; ?>/penjualan/ubah" method="post">
          <input type="hidden" name="id_penjualan" id="id_penjualan" value="<?= $data['br']['id_penjualan']; ?>">
          <div class="form-group">
            <label for="jumlah_penjualan">Jumlah Penjualan</label>
            <input type="number" class="form-control" id="jumlah_penjualan" name="jumlah_penjualan" value="<?= $data['br']['jumlah_penjualan']; ?>">
          </div>

          <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="text" class="form-control" id="harga_jual" name="harga_jual" value="<?= $data['br']['harga_jual']; ?>">
          </div>
</div>
<div class="modal-footer">
        <a href="<?= BASEURL; ?>/penjualan"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
</form>
</div>