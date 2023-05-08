
<body>
<div clas="container mt-3">
    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <h1 align="center">DAFTAR BARANG</h1>
    <table class="table table-hover">
        <tr>
            <th scope="col">Nama Barang</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Satuan</th>
            <th scope="col"></th>
        </tr>
        <?php foreach ($data['br'] as $br) : ?>
            <tr>
                <td><?= $br['nama_barang']; ?></td>
                <td><?= $br['keterangan']; ?></td>
                <td><?= $br['satuan']; ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/barang/hapus/<?= $br['id_barang']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin ingin menghapus data?');">hapus</a>
                    <a href="<?= BASEURL; ?>/barang/ubahDetail/<?= $br['id_barang']; ?>" class="badge badge-primary float-right">Ubah</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data Barang
        </button>
      </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/barang/tambah" method="post">
          <input type="hidden" name="id_barang" id="id_barang">
          <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama barang" placeholder="Nama Barang">
          </div>

          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
          </div>

          <div class="form-group">
            <label for="satuan">Satuan</label>
            <input type="text" class="form-control" id="satuan" name="satuan" placeholder="contoh: Kilogram">
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

