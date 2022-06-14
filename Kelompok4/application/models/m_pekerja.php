<?php

class M_pekerja extends CI_Model
{
    private $primary = "kta";
    private $table = "tb_pekerja";

    public function getPekerja()
    {
        return $this->db->get('tb_pekerja');
    }

    public function setPekerja($pkj)
    {
        $this->db->insert('tb_pekerja', $pkj);
    }
    public function cek($kta)
    {
        $this->db->where($this->primary, $kta);
        $query = $this->db->get($this->table);
        return $query;
    }

    public function jumlahPkj()
    {
        return $this->db->count_all("tb_pekerja");
    }

    public function hapus($where, $table)
    {

        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_pekerja($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
