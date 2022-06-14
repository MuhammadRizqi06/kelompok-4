<?php

class Vaksin extends CI_Controller
{
    public function  index()
    {
        $data['jenis'] = $this->m_vaksin->getVaksin()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_vaksin', $data);
        $this->load->view('template/footer');
    }

    public function tambah_vaksin()
    {
        $id_vaksin = $this->input->post('id_vaksin');
        if ($id_vaksin <> "") {
            $cek = $this->m_vaksin->cek($id_vaksin);
            if ($cek->num_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>ID Vaksin Telah Ada</strong>
                </div>');
                redirect('vaksin/index');
            } else {
                $jns = array(
                    'id_vaksin' => $this->input->post('id_vaksin'),
                    'nama_vaksin' => $this->input->post('nama_vaksin')
                );
                $this->m_vaksin->setVaksin($jns);
                $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>ID Vaksin Berhasil Ditambahkan</strong>
                </div>');
                $data['jenis'] = $this->m_vaksin->getVaksin()->result();
                $this->load->view('template/header');
                $this->load->view('template/sidebar');
                $this->load->view('v_vaksin', $data);
                $this->load->view('template/footer');
            }
        } else {
            $data['jenis'] = $this->m_vaksin->getVaksin()->result();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('v_vaksin', $data);
            $this->load->view('template/footer');
        }
    }

    // {
    //     $id_vaksin   = $this->input->post('id_vaksin');
    //     $nama_vaksin   = $this->input->post('nama_vaksin');

    //     $jns = array(
    //         'id_vaksin' => $id_vaksin,
    //         'nama_vaksin' => $nama_vaksin
    //     );

    //     $this->m_vaksin->setVaksin($jns);
    //     $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    //     <strong>Data Berhasil Ditambahkan</strong>
    //     </div>');
    //     redirect('vaksin/index');
    // }


    public function hapus($id_vaksin)
    {
        $where = array('id_vaksin' => $id_vaksin);
        $this->m_vaksin->hapus($where, 'tb_vaksin');
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Data Berhasil Dihapus</strong>
        </div>');
        redirect('vaksin/index');
    }
}
