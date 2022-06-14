<?php

class M_transaksi extends CI_Model
{
    public function getKta()
    {
        return $this->db->get("tb_pekerja");
    }

    public function getNik()
    {
        return $this->db->get("tb_pasien");
    }

    public function getVaksin()
    {

        return $this->db->get("tb_vaksin");
    }

    public function setTransaksi($transaksi)
    {
        $this->db->insert('tb_transaksi', $transaksi);
    }

    public function getTransaksi()
    {
        return $this->db->get('tb_transaksi');
    }

    public function totalTransaksi()
    {
        return $this->db->count_all("tb_transaksi");
    }
}
