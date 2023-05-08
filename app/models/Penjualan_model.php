<?php 

class Penjualan_model {
    private $table = 'penjualan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPenjualan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPenjualanById($id_penjualan)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_penjualan=:id_penjualan');
        $this->db->bind('id_penjualan', $id_penjualan);
        return $this->db->single();
    }

    public function tambahDataPenjualan($data)
    {
        $query = "INSERT INTO penjualan
                    VALUES
                  (null,:jumlah_penjualan, :harga_jual, :id_pengguna, :id_pelanggan)";
        
        $this->db->query($query);
        $this->db->bind('jumlah_penjualan', $data['jumlah_penjualan']);
        $this->db->bind('harga_jual', $data['harga_jual']);
        $this->db->bind('id_pengguna', $data=3);
        $this->db->bind('id_pelanggan', $data=1);

        $this->db->execute();

        return $this->db->rowCount();;
    }

    public function hapusDataPenjualan($id_penjualan)
    {
        $query = "DELETE FROM penjualan WHERE id_penjualan = :id_penjualan";
        
        $this->db->query($query);
        $this->db->bind('id_penjualan', $id_penjualan);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataPenjualan($data)
    {
        $query = "UPDATE penjualan SET
                    jumlah_penjualan = :jumlah_penjualan,
                    harga_jual = :harga_jual
                  WHERE id_penjualan = :id_penjualan";
        
        $this->db->query($query);
        $this->db->bind('jumlah_penjualan', $data['jumlah_penjualan']);
        $this->db->bind('harga_jual', $data['harga_jual']);
        $this->db->bind('id_penjualan', $data['id_penjualan']);

        $this->db->execute();

        return $this->db->rowCount();
    }



}