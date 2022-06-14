<?php

class Admin extends CI_Controller
{
    public function index()
    {
        $data['jumlahPkj'] = $this->m_pekerja->jumlahPkj();
        $data['jumlahPlg'] = $this->m_pelanggan->jumlahPlg();
        $data['jumlahVaksin'] = $this->m_vaksin->jumlahVaksin();
        $data['totalTransaksi'] = $this->m_transaksi->totalTransaksi();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer');
    }
}
