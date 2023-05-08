
<body>
<div clas="container mt-3">
    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <h1 align="center">DAFTAR PEMBELIAN</h1>
    <table class="table table-hover">
        <tr>
            <th scope="col">ID Pembelian</th>
            <th scope="col">Jumlah Pembelian</th>
            <th scope="col">Harga Beli</th>
            <th scope="col"></th>
        </tr>
        <?php foreach ($data['br'] as $br) : ?>
            <tr>
                <td><?= $br['id_pembelian']; ?></td>
                <td><?= $br['jumlah_pembelian']; ?></td>
                <td><?= $br['harga_beli']; ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/pembelian/hapus/<?= $br['id_pembelian']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin ingin menghapus data?');">hapus</a>
                    <a href="<?= BASEURL; ?>/pembelian/ubahDetail/<?= $br['id_pembelian']; ?>" class="badge badge-primary float-right">Ubah</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data Pembelian
        </button>
      </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Pembelian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/pembelian/tambah" method="post">
          <input type="hidden" name="id_pembelian" id="id_pembelian">
          <div class="form-group">
            <label for="jumlah_pembelian">Jumlah Pembelian</label>
            <input type="number" class="form-control" id="jumlah_pembelian" name="jumlah_pembelian" placeholder="Jumlah Pembelian">
          </div>

          <div class="form-group">
            <label for="harga_beli">Harga Beli</label>
            <input type="number" class="form-control" id="harga_beli" name="harga_beli" placeholder="Harga Beli">
          </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- modal edit -->
</body>

