<?php 

class Barang_model {
    private $table = 'barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarang()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangById($id_barang)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_barang=:id_barang');
        $this->db->bind('id_barang', $id_barang);
        return $this->db->single();
    }

    public function tambahDataBarang($data)
    {
        $query = "INSERT INTO barang
                    VALUES
                  (null,:nama_barang, :keterangan, :satuan, :id_pengguna)";
        
        $this->db->query($query);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('satuan', $data['satuan']);
        $this->db->bind('id_pengguna', $data=3);

        $this->db->execute();

        return $this->db->rowCount();;
    }

    public function hapusDataBarang($id_barang)
    {
        $query = "DELETE FROM barang WHERE id_barang = :id_barang";
        
        $this->db->query($query);
        $this->db->bind('id_barang', $id_barang);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataBarang($data)
    {
        $query = "UPDATE barang SET
                    nama_barang = :nama_barang,
                    keterangan = :keterangan,
                    satuan = :satuan
                  WHERE id_barang = :id_barang";
        
        $this->db->query($query);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('satuan', $data['satuan']);
        $this->db->bind('id_barang', $data['id_barang']);

        $this->db->execute();

        return $this->db->rowCount();
    }



}