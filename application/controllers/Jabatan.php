<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class Jabatan extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('JabatanModel');
        // $this->load->library('form_validation');
    }
    /*------------------------------CREATE-----------------------------*/
    public function tambah()
    {
        $this->JabatanModel->save();
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah.');
        redirect(base_url('jabatan'));
    }
    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function index()
    {
        $data = [
            'title' => 'Data Jabatan',
            'jabatan' => $this->JabatanModel->getAll(),
            'departemen' => $this->JabatanModel->getDepartemen()
        ];

        $this->render_backend('pages/jabatan/index', $data);
    }

    public function getDivisi()
    {
        $id_departemen     = $this->input->post('id_departemen', TRUE);
        $data                 = $this->JabatanModel->getDivisi($id_departemen)->result();
        echo json_encode($data);
    }

    public function getJabatan()
    {
        $id_divisi     = $this->input->post('id_divisi', TRUE);
        $data             = $this->JabatanModel->getJabatan($id_divisi)->result();
        echo json_encode($data);
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/

    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function hapus($id_jabatan = null)
    {
        if (!isset($id_jabatan)) show_404();

        if ($this->JabatanModel->delete($id_jabatan)) {
            $this->session->set_flashdata('pesan', 'Data Berhasil Hihapus.');
            redirect('jabatan');
        }
    }
    /*-----------------------------------------------------------------*/
}
