<?php 

class Pembelian_model {
    private $table = 'pembelian';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPembelian()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPembelianById($id_pembelian)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_pembelian=:id_pembelian');
        $this->db->bind('id_pembelian', $id_pembelian);
        return $this->db->single();
    }

    public function tambahDataPembelian($data)
    {
        $query = "INSERT INTO pembelian
                    VALUES
                  (null,:jumlah_pembelian, :harga_beli, :id_pengguna, :id_supplier)";
        
        $this->db->query($query);
        $this->db->bind('jumlah_pembelian', $data['jumlah_pembelian']);
        $this->db->bind('harga_beli', $data['harga_beli']);
        $this->db->bind('id_pengguna', $data=3);
        $this->db->bind('id_supplier', $data=1);

        $this->db->execute();

        return $this->db->rowCount();;
    }

    public function hapusDataPembelian($id_pembelian)
    {
        $query = "DELETE FROM pembelian WHERE id_pembelian = :id_pembelian";
        
        $this->db->query($query);
        $this->db->bind('id_pembelian', $id_pembelian);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataPembelian($data)
    {
        $query = "UPDATE pembelian SET
                    jumlah_pembelian = :jumlah_pembelian,
                    harga_beli = :harga_beli
                  WHERE id_pembelian = :id_pembelian";
        
        $this->db->query($query);
        $this->db->bind('jumlah_pembelian', $data['jumlah_pembelian']);
        $this->db->bind('harga_beli', $data['harga_beli']);
        $this->db->bind('id_pembelian', $data['id_pembelian']);

        $this->db->execute();

        return $this->db->rowCount();
    }



}