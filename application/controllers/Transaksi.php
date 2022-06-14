<?php

class Transaksi extends CI_Controller
{
    public function index()
    {
        $this->load->library(array('pagination', 'form_validation', 'upload'));

        $data['pkj'] = $this->m_transaksi->getKta()->result();
        $data['plg'] = $this->m_transaksi->getNik()->result();
        $data['vaksin'] = $this->m_transaksi->getVaksin()->result();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_transaksi', $data);
        $this->load->view('template/footer');
    }


    public function tambah_Transaksi()
    {
        $id_transaksi = $this->input->post('id_transaksi');
        $kta = $this->input->post('kta');
        $nama_pkj = $this->input->post('nama_pkj');
        $nik = $this->input->post('nik');
        $nama_plg = $this->transaksi->cariVaksin('nama_vaksin');
        $id_vaksin = $this->input->post('id_vaksin');
        $nama_vaksin = $this->input->post('nama_vaksin');
        $dosis = $this->input->post('dosis');
        $tanggal = $this->input->post('tanggal');

        $transaksi = array(
            'id_transaksi' => $id_transaksi,
            'kta' => $kta,
            'nama_pkj' => $nama_pkj,
            'nik' => $nik,
            'nama_plg' => $nama_plg,
            'id_vaksin' => $id_vaksin,
            'nama_vaksin' => $nama_vaksin,
            'dosis' => $dosis,
            'tanggal' => $tanggal

        );
        $this->m_transaksi->setTransaksi($transaksi);
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Data Berhasil Ditambahkan</strong>
        </div>');
        redirect('transaksi/index/');
    }
}
