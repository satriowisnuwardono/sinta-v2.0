<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pelanggaran extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PelanggaranModel');
        $this->load->library('form_validation');
    }
    /*------------------------------CREATE-----------------------------*/
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Pelanggaran',
            'pegawai' => $this->PelanggaranModel->getPegawai()
        ];

        $pelanggaran = $this->PelanggaranModel;
        $validation = $this->form_validation;
        $validation->set_rules($pelanggaran->rules());

        if ($validation->run() == FALSE) {
            $this->render_backend('pages/pelanggaran/tambah', $data);
        } else {
            $pelanggaran->save();
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah.');
            redirect('pelanggaran');
        }
    }
    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function index()
    {
        $data = [
            'title' => 'Data Pelanggaran Pegawai',
            'pelanggaran' => $this->PelanggaranModel->getAll()
        ];

        $this->render_backend('pages/pelanggaran/index', $data);
    }

    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function ubah($id_pelanggaran = null)
    {
        $data = [
            'title' => 'Ubah Data Pelanggaran',
            'pelanggaran' => $this->PelanggaranModel->getById($id_pelanggaran)
        ];

        $pelanggaranModel = $this->PelanggaranModel;
        $validation = $this->form_validation;
        $validation->set_rules($pelanggaranModel->rules());

        if ($validation->run() == FALSE) {
            $this->render_backend('pages/pelanggaran/ubah', $data);
        } else {
            $pelanggaranModel->update();
            $this->session->set_flashdata('pesan', 'Data Berhasil Diperbarui.');
            redirect('pelanggaran');
        }
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function hapus($id_pelanggaran = null)
    {
        $this->PelanggaranModel->delete($id_pelanggaran);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus.');
        redirect('pelanggaran');
    }

    /*-----------------------------------------------------------------*/
}
