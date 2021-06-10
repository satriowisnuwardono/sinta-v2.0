<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MasaKerja extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MasaKerjaModel');
        $this->load->library('form_validation');
    }

    /*------------------------------CREATE-----------------------------*/
    public function tambah($id_pegawai)
    {
        $data = [
            'title' => 'Tambah Data Masa Kerja',
            'pegawai' => $this->MasaKerjaModel->getPegawai($id_pegawai),
            'departemen' => $this->MasaKerjaModel->getDepartemen()
        ];

        $this->render_backend('pages/masa_kerja/tambah', $data);
    }

    public function simpan()
    {
        $masa_kerja = $this->MasaKerjaModel;
        $validation = $this->form_validation;
        $validation->set_rules($masa_kerja->rules());

        if ($validation->run() == FALSE) {
            redirect('masaKerja/tambah');
        } else {
            $this->MasaKerjaModel->save();
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah.');
            redirect('masaKerja');
        }
    }

    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function index()
    {
        $data = [
            'title' => 'Data Masa Kerja',
            'masa_kerja' => $this->MasaKerjaModel->getAll()
        ];

        $this->render_backend('pages/masa_kerja/index', $data);
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function ubah($id_masa_kerja = null)
    {
        if (!isset($id_masa_kerja)) redirect('masaKerja');

        $masa_kerja = $this->MasaKerjaModel;
        $validation = $this->form_validation;
        $validation->set_rules($masa_kerja->rules());

        if ($validation->run() == FALSE) {
            $data = [
                'title' => 'Ubah Data Masa Kerja',
                'masa_kerja' => $masa_kerja->getByIdMasaKerja($id_masa_kerja),
            ];
            $this->render_backend('pages/masa_kerja/ubah', $data);
        } else {
            $this->MasaKerjaModel->update();
            $this->session->set_flashdata('pesan', 'Data Berhasil Diubah.');
            redirect('masaKerja');
        }
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function hapus($id_masa_kerja = null)
    {
        if (!isset($id_masa_kerja)) show_404();

        $this->MasaKerjaModel->delete($id_masa_kerja);
        $this->session->set_flashdata('pessan', 'Data Berhasil Dihapus.');
        redirect('masaKerja');
    }
    /*-----------------------------------------------------------------*/
}
