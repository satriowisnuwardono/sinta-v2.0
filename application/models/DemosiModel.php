<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class DemosiModel extends CI_Model
{

    public function rules()
    {
        return [
            ['field' => 'jabatan_sebelum', 'label' => 'Jabatan Sebelum', 'rules' => 'required'],
            ['field' => 'jabatan_sesudah', 'label' => 'Jabatan Sesudah', 'rules' => 'required'],
            ['field' => 'divisi_sebelum', 'label' => 'Divisi Sebelum', 'rules' => 'required'],
            ['field' => 'divisi_sesudah', 'label' => 'Divisi Sesudah', 'rules' => 'required'],
            ['field' => 'tanggal_sk', 'label' => 'Tanggal SK', 'rules' => 'required'],
            ['field' => 'nomor_sk', 'label' => 'Nomor SK', 'rules' => 'required'],
        ];
    }
    /*------------------------------CREATE-----------------------------*/
    public function save()
    {
        $post = $this->input->post();
        $this->id_demosi = uniqid();
        $this->id_pegawai = $post['id_pegawai'];
        $this->jabatan_sebelum = $post['jabatan_sebelum'];
        $this->jabatan_sesudah = $post['jabatan_sesudah'];
        $this->divisi_sebelum = $post['divisi_sebelum'];
        $this->divisi_sesudah = $post['divisi_sesudah'];
        $this->tanggal_sk = $post['tanggal_sk'];
        $this->nomor_sk = $post['nomor_sk'];

        $this->db->insert('tbl_demosi', $this);
    }

    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function getAll()
    {
        $this->db->select('tbl_pegawai.nama, tbl_demosi.*');
        $this->db->from('tbl_demosi');
        $this->db->join('tbl_pegawai', 'tbl_pegawai.id_pegawai = tbl_demosi.id_pegawai');
        $this->db->order_by('id_demosi', 'DESC');

        $query = $this->db->get();
        return $query->result();
    }

    public function getByIdDemosi($id_demosi)
    {
        $this->db->select('tbl_pegawai.nip, tbl_pegawai.nama, tbl_demosi.*');
        $this->db->from('tbl_demosi');
        $this->db->where('id_demosi', $id_demosi);
        $this->db->join('tbl_pegawai', 'tbl_pegawai.id_pegawai = tbl_demosi.id_pegawai');

        $query = $this->db->get();
        return $query->row();
    }

    public function getPegawai()
    {
        return $this->db->get('tbl_pegawai')->result();
    }

    public function getDivisi()
    {
        return $this->db->get('tbl_divisi')->result();
    }

    public function getJabatan()
    {
        return $this->db->get('tbl_jabatan')->result();
    }

    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function update()
    {
        $post = $this->input->post();
        $this->id_demosi = $post['id_demosi'];
        $this->id_pegawai = $post['id_pegawai'];
        $this->jabatan_sebelum = $post['jabatan_sebelum'];
        $this->jabatan_sesudah = $post['jabatan_sesudah'];
        $this->divisi_sebelum = $post['divisi_sebelum'];
        $this->divisi_sesudah = $post['divisi_sesudah'];
        $this->tanggal_sk = $post['tanggal_sk'];
        $this->nomor_sk = $post['nomor_sk'];

        return $this->db->update('tbl_demosi', $this, array('id_demosi' => $post['id_demosi']));
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function delete($id_demosi)
    {
        return $this->db->delete('tbl_demosi', ['id_demosi' => $id_demosi]);
    }
    /*-----------------------------------------------------------------*/
}
