<?php

class M_vaksin extends CI_Model
{
    private $primary = "id_vaksin";
    private $table = "tb_vaksin";
    public function getVaksin()
    {
        return $this->db->get('tb_vaksin');
    }

    public function setVaksin($jns)
    {
        $this->db->insert('tb_vaksin', $jns);
    }
    public function cek($id_vaksin)
    {
        $this->db->where($this->primary, $id_vaksin);
        $query = $this->db->get($this->table);
        return $query;
    }

    public function hapus($where, $table)
    {

        $this->db->where($where);
        $this->db->delete($table);
    }

    public function jumlahVaksin()
    {
        return $this->db->count_all("tb_vaksin");
    }
}
