<?php

class Pekerja extends CI_Controller
{
    // method pertama yang dipanggil di class pekerja
    public function  index()
    {
        $data['pekerja'] = $this->m_pekerja->getPekerja()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_pekerja', $data);
        $this->load->view('templates/footer');
    }

    // method untuk menambahkan data pekerja yang dikirim ke m_pekerja dan dimasukan ke database
    public function tambah_pekerja()
    {
        $kta = $this->input->post('kta');
        if ($kta <> "") {
            $cek = $this->m_pekerja->cek($kta);
            if ($cek->num_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>NIK Pekerja Telah Ada</strong>
                </div>');
                redirect('pekerja/index');
            } else {



                $pkj = array(
                    'kta' => $this->input->post('kta'),
                    'nama_pkj' => $this->input->post('nama_pkj'),
                    'email' => $this->input->post('email'),
                    'jk' => $this->input->post('jk'),
                    'alamat' => $this->input->post('alamat'),
                    'bagian' => $this->input->post('bagian'),

                );
                $this->m_pekerja->setPekerja($pkj);

                // set flash data untuk ngeset alert ketika melakukan penginputan data
                $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Data Pekerja Berhasil Ditambahkan</strong>
                </div>');
                $data['pekerja'] = $this->m_pekerja->getPekerja()->result();
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('v_pekerja', $data);
                $this->load->view('templates/footer');
            }
        } else {
            $data['pekerja'] = $this->m_pekerja->getPekerja()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('v_pekerja', $data);
            $this->load->view('templates/footer');
        }
    }

    // method untuk menghapus data pekerja berdasarkan kta/nik pekerja, yang berhubungan dengan m_pekerja->hapus()
    public function hapus($kta)
    {
        $where = array('kta' => $kta);
        $this->m_pekerja->hapus($where, 'tb_pekerja');

        // set flash data untuk ngeset alert ketika melakukan penghapusan data
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Data Berhasil Dihapus</strong>
        </div>');
        redirect('pekerja/index');
    }

    // belon kelar, masih ada error
    public function edit($kta)
    {
        $where = array('kta' => $kta);
        $data['pekerja'] = $this->m_pekerja->edit_pekerja($where, 'tb_pekerja')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_editPkj', $data);
        $this->load->view('templates/footer');
    }
}
