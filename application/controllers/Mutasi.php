<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mutasi extends My_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('MutasiModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = [
            'title' => 'Data mutasi',
            'mutasi' => $this->MutasiModel->getAll()
        ];

        $this->render_backend('pages/mutasi/index', $data);
    }
    /*------------------------------CREATE-----------------------------*/
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data mutasi',
            'pegawai' => $this->MutasiModel->getPegawai(),
            'divisi' => $this->MutasiModel->getDivisi(),
            'jabatan' => $this->MutasiModel->getJabatan(),
        ];
        $mutasi = $this->MutasiModel;
        $validation = $this->form_validation;
        $validation->set_rules($mutasi->rules());

        if ($validation->run() == FALSE) {
            $this->render_backend('pages/mutasi/tambah', $data);
        } else {
            $mutasi->save();
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah.');
            redirect('mutasi');
        }
    }

    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/

    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function ubah($id_mutasi = null)
    {
        if (!isset($id_mutasi)) redirect('mutasi');

        $mutasi = $this->MutasiModel;
        $validation = $this->form_validation;
        $validation->set_rules($mutasi->rules());

        if ($validation->run() == FALSE) {
            $data = [
                'title' => 'Ubah Data Masa Kerja',
                'mutasi' => $mutasi->getByIdMutasi($id_mutasi),
                'divisi' => $this->MutasiModel->getDivisi(),
                'jabatan' => $this->MutasiModel->getJabatan(),
            ];
            $this->render_backend('pages/mutasi/ubah', $data);
        } else {
            $mutasi->update();
            $this->session->set_flashdata('pesan', 'Data Berhasil Diubah.');
            redirect('mutasi');
        }
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function hapus($id_mutasi = null)
    {
        $this->MutasiModel->delete($id_mutasi);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus.');
        redirect('mutasi');
    }
    /*-----------------------------------------------------------------*/
}
