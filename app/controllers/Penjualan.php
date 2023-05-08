<?php 

class Penjualan extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Penjualan';
        $data['br'] = $this->model('Penjualan_model')->getAllPenjualan();
        $this->view('templates/header', $data);
        $this->view('penjualan/index', $data);
        $this->view('templates/footer');
    }

    public function ubahDetail($id)
    {
        $data['judul'] = 'Detail Penjualan';
        $data['br'] = $this->model('Penjualan_model')->getPenjualanById($id);
        $this->view('templates/header', $data);
        $this->view('penjualan/ubah', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Penjualan_model')->tambahDataPenjualan($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/penjualan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/penjualan');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Penjualan_model')->hapusDataPenjualan($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/penjualan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/penjualan');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Penjualan_model')->getPenjualanById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Penjualan_model')->ubahDataPenjualan($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/penjualan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/penjualan');
            exit;
        } 
    }


}