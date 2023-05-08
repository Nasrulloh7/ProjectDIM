<?php 

class Report_model {
    
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getReportSum()
    {
        $query = "SELECT SUM((p.jumlah_penjualan * p.harga_jual) - (b.jumlah_pembelian * b.harga_beli)) AS Keuntungan
        FROM penjualan p JOIN pembelian b ON p.id_pengguna = b.id_pengguna AND p.id_penjualan = b.id_pembelian";

        //$query = "SELECT SUM(HargaJual) AS TOTAL FROM penjualan";
        $this->db->query($query);


        $this->db->execute();
        // $this->db->query('SELECT SUM(HargaJual) AS TOTAL FROM penjualan');
        return $this->db->single();
    }


}