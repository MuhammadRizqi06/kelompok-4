<?php

class M_pelanggan extends CI_Model
{
    //method yang berfungsi untuk mengambil data pelanggan dari tabel tb_pasien di database phpmyadmin
    public function getPelanggan()
    {
        return $this->db->get('tb_pasien');
    }
    //method yang berfungsi untuk menambahkan data pelanggan ke tabel tb_pasien di database
    public function setPelanggan($plg)
    {
        $this->db->insert('tb_pasien', $plg);
    }
    //method yang berfungsi menghapus data pelanggan dari tabel tb_pasien di database
    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // method yang berfungsi untuk menghitung jumlah pelanggan yang di tampilkan di dashboard
    public function jumlahPlg()
    {
        return $this->db->count_all("tb_pasien");
    }

    public function edit_pelanggan($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
