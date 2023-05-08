<?php 

class Barang extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Barang';
        $data['br'] = $this->model('Barang_model')->getAllBarang();
        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }

    public function ubahDetail($id)
    {
        $data['judul'] = 'Detail Barang';
        $data['br'] = $this->model('Barang_model')->getBarangById($id);
        $this->view('templates/header', $data);
        $this->view('barang/ubah', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        //$this->model('Barang_model')->tambahDataBarang($_POST);
        if( $this->model('Barang_model')->tambahDataBarang($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/barang');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/barang');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Barang_model')->hapusDataBarang($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/barang');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/barang');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Barang_model')->getBarangById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Barang_model')->ubahDataBarang($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/barang');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/barang');
            exit;
        } 
    }


}