<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pelatihan extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PelatihanModel');
        $this->load->library('form_validation');
    }
    /*------------------------------CREATE-----------------------------*/
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Pelatihan dan Sertifikat',
            'pegawai' => $this->PelatihanModel->getPegawai()
        ];

        $pelatihan = $this->PelatihanModel;
        $validation = $this->form_validation;
        $validation->set_rules($pelatihan->rules());

        if ($validation->run() == FALSE) {
            $this->render_backend('pages/pelatihan/tambah', $data);
        } else {
            $pelatihan->save();
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah.');
            redirect('pelatihan');
        }
    }
    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function index()
    {
        $data = [
            'title' => 'Data pelatihan Pegawai',
            'pelatihan' => $this->PelatihanModel->getAll()
        ];

        $this->render_backend('pages/pelatihan/index', $data);
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE----------------------------*/
    public function ubah($id_pelatihan = null)
    {
        $data = [
            'title' => 'Ubah Data Pelatihan dan Sertifikat',
            'pelatihan' => $this->PelatihanModel->getById($id_pelatihan)
        ];

        $pelatihan = $this->PelatihanModel;
        $validation = $this->form_validation;
        $validation->set_rules($pelatihan->rules());

        if ($validation->run() == FALSE) {
            $this->render_backend('pages/pelatihan/ubah', $data);
        } else {
            $pelatihan->update();
            $this->session->set_flashdata('pesan', 'Data Berhasil Diperbarui.');
            redirect('pelatihan');
        }
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function hapus($id_pelatihan = null)
    {
        $this->PelatihanModel->delete($id_pelatihan);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus.');
        redirect('pelatihan');
    }
    /*-----------------------------------------------------------------*/
}
