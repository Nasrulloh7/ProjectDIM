<div>
<form action="<?= BASEURL; ?>/pembelian/ubah" method="post">
          <input type="hidden" name="id_pembelian" id="id_pembelian" value="<?= $data['br']['id_pembelian']; ?>">
          <div class="form-group">
            <label for="jumlah_pembelian">Jumlah Pembelian</label>
            <input type="number" class="form-control" id="jumlah_pembelian" name="jumlah_pembelian" value="<?= $data['br']['jumlah_pembelian']; ?>">
          </div>

          <div class="form-group">
            <label for="harga_beli">Harga Beli</label>
            <input type="text" class="form-control" id="harga_beli" name="harga_beli" value="<?= $data['br']['harga_beli']; ?>">
          </div>
</div>
<div class="modal-footer">
        <a href="<?= BASEURL; ?>/pembelian"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
</form>
</div>