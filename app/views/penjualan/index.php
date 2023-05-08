
<body>
<div clas="container mt-3">
    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <h1 align="center">DAFTAR PENJUALAN</h1>
    <table class="table table-hover">
        <tr>
            <th scope="col">ID Penjualan</th>
            <th scope="col">Jumlah Penjualan</th>
            <th scope="col">Harga Jual</th>
            <th scope="col"></th>
        </tr>
        <?php foreach ($data['br'] as $br) : ?>
            <tr>
                <td><?= $br['id_penjualan']; ?></td>
                <td><?= $br['jumlah_penjualan']; ?></td>
                <td><?= $br['harga_jual']; ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/penjualan/hapus/<?= $br['id_penjualan']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin ingin menghapus data?');">hapus</a>
                    <a href="<?= BASEURL; ?>/penjualan/ubahDetail/<?= $br['id_penjualan']; ?>" class="badge badge-primary float-right">Ubah</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data Penjualan
        </button>
      </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Penjualan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/penjualan/tambah" method="post">
          <input type="hidden" name="id_penjualan" id="id_penjualan">
          <div class="form-group">
            <label for="jumlah_penjualan">Jumlah Penjualan</label>
            <input type="number" class="form-control" id="jumlah_penjualan" name="jumlah_penjualan" placeholder="Jumlah Penjualan">
          </div>

          <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="number" class="form-control" id="harga_jual" name="harga_jual" placeholder="Harga Jual">
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

