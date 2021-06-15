<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Penghargaan extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PenghargaanModel');
        $this->load->library('form_validation');
    }
    /*------------------------------CREATE-----------------------------*/
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Penghargaan',
            'pegawai' => $this->PenghargaanModel->getPegawai()
        ];

        $penghargaan = $this->PenghargaanModel;
        $validation = $this->form_validation;
        $validation->set_rules($penghargaan->rules());

        if ($validation->run() == FALSE) {
            $this->render_backend('pages/penghargaan/tambah', $data);
        } else {
            $penghargaan->save();
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah.');
            redirect('penghargaan');
        }
    }
    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function index()
    {
        $data = [
            'title' => 'Data Penghargaan Pegawai',
            'penghargaan' => $this->PenghargaanModel->getAll()
        ];

        $this->render_backend('pages/penghargaan/index', $data);
    }

    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function ubah($id_penghargaan = null)
    {
        $data = [
            'title' => 'Ubah Data Penghargaan',
            'penghargaan' => $this->PenghargaanModel->getById($id_penghargaan)
        ];

        $penghargaanModel = $this->PenghargaanModel;
        $validation = $this->form_validation;
        $validation->set_rules($penghargaanModel->rules());

        if ($validation->run() == FALSE) {
            $this->render_backend('pages/penghargaan/ubah', $data);
        } else {
            $penghargaanModel->update();
            $this->session->set_flashdata('pesan', 'Data Berhasil Diperbarui.');
            redirect('penghargaan');
        }
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function hapus($id_penghargaan = null)
    {
        $this->PenghargaanModel->delete($id_penghargaan);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus.');
        redirect('penghargaan');
    }

    /*-----------------------------------------------------------------*/
}
