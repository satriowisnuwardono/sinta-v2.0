<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PegawaiModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Data Pegawai';

        // Melihat Semua Data
        // if (
        //     $this->session->userdata('data_pegawai') == '1' or
        //     $this->session->userdata('data_pegawai') == '2'
        // ) {
        $data['pegawai'] = $this->PegawaiModel->getAll();
        // }

        // Melihat Data Berdasarkan Session user_pegawai
        // if ($this->session->userdata('data_pegawai') == '0') {
        //     $data['pegawai'] = $this->PegawaiModel->getById_Session($this->session->userdata('id_pegawai'));
        // }

        $this->render_backend('pages/pegawai/index', $data);
    }
    /*------------------------------CREATE-----------------------------*/
    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Pegawai';
        $pegawai = $this->PegawaiModel;
        $validation = $this->form_validation;
        $validation->set_rules($pegawai->rules());

        if ($validation->run() == FALSE) {
            $this->render_backend('pages/pegawai/tambah', $data);
        } else {
            $pegawai->save();
            $this->session->set_flashdata('pesan', 'Data Behasil Ditambah!');
            redirect('pegawai');
        }
    }
    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function detail($id_pegawai)
    {
        $data = [
            'title' => 'Detail Pegawai',
            'pegawai' => $this->PegawaiModel->getById($id_pegawai),
            'bpjs' => $this->PegawaiModel->getBpjs($id_pegawai),
            'masa_kerja' => $this->PegawaiModel->getMasaKerja($id_pegawai),
            'demosi' => $this->PegawaiModel->getDemosi($id_pegawai),
        ];

        $this->render_backend('pages/pegawai/detail_pegawai', $data);
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function ubah($id_pegawai = null)
    {
        if (!isset($id_pegawai)) redirect('pegawai');

        $pegawai = $this->PegawaiModel;
        $validation = $this->form_validation;
        $validation->set_rules($pegawai->rules());

        if ($validation->run() == FALSE) {
            $data = [
                'title' => 'Form Ubah Data Pegawai',
                'pegawai' => $pegawai->getById($id_pegawai)
            ];
            $this->render_backend('pages/pegawai/ubah', $data);
        } else {
            $pegawai->update();
            $this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
            redirect('pegawai');
        }
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function hapus($id_pegawai = null)
    {
        if (!isset($id_pegawai)) show_404();

        $this->PegawaiModel->_deleteImage($id_pegawai);
        if ($this->PegawaiModel->delete($id_pegawai)) {
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!');
            redirect('pegawai');
        }
    }
    /*-----------------------------------------------------------------*/
}
