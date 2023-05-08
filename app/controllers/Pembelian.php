<?php 

class Pembelian extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Pembelian';
        $data['br'] = $this->model('Pembelian_model')->getAllPembelian();
        $this->view('templates/header', $data);
        $this->view('pembelian/index', $data);
        $this->view('templates/footer');
    }

    public function ubahDetail($id)
    {
        $data['judul'] = 'Detail Pembelian';
        $data['br'] = $this->model('Pembelian_model')->getPembelianById($id);
        $this->view('templates/header', $data);
        $this->view('pembelian/ubah', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Pembelian_model')->tambahDataPembelian($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/pembelian');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/pembelian');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Pembelian_model')->hapusDataPembelian($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/pembelian');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/pembelian');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Pembelian_model')->getPembelianById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Pembelian_model')->ubahDataPembelian($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/pembelian');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/pembelian');
            exit;
        } 
    }


}