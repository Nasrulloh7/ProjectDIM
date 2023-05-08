<div>
<form action="<?= BASEURL; ?>/barang/ubah" method="post">
          <input type="hidden" name="id_barang" id="id_barang" value="<?= $data['br']['id_barang']; ?>">
          <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $data['br']['nama_barang']; ?>">
          </div>

          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $data['br']['keterangan']; ?>">
          </div>

          <div class="form-group">
            <label for="satuan">Satuan</label>
            <input type="text" class="form-control" id="satuan" name="satuan" value="<?= $data['br']['satuan']; ?>">
          </div>

</div>
<div class="modal-footer">
          <a href="<?= BASEURL; ?>/barang"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
          <button type="submit" class="btn btn-primary">Ubah Data</button>
</form>
</div>