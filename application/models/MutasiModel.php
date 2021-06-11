<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MutasiModel extends CI_Model
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
        $this->id_mutasi = uniqid();
        $this->id_pegawai = $post['id_pegawai'];
        $this->jabatan_sebelum = $post['jabatan_sebelum'];
        $this->jabatan_sesudah = $post['jabatan_sesudah'];
        $this->divisi_sebelum = $post['divisi_sebelum'];
        $this->divisi_sesudah = $post['divisi_sesudah'];
        $this->tanggal_sk = $post['tanggal_sk'];
        $this->nomor_sk = $post['nomor_sk'];

        $this->db->insert('tbl_mutasi', $this);
    }

    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function getAll()
    {
        $this->db->select('tbl_pegawai.nama, tbl_mutasi.*');
        $this->db->from('tbl_mutasi');
        $this->db->join('tbl_pegawai', 'tbl_pegawai.id_pegawai = tbl_mutasi.id_pegawai');
        $this->db->order_by('id_mutasi', 'DESC');

        $query = $this->db->get();
        return $query->result();
    }

    public function getByIdMutasi($id_mutasi)
    {
        $this->db->select('tbl_pegawai.nip, tbl_pegawai.nama, tbl_mutasi.*');
        $this->db->from('tbl_mutasi');
        $this->db->where('id_mutasi', $id_mutasi);
        $this->db->join('tbl_pegawai', 'tbl_pegawai.id_pegawai = tbl_mutasi.id_pegawai');

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
        $this->id_mutasi = $post['id_mutasi'];
        $this->id_pegawai = $post['id_pegawai'];
        $this->jabatan_sebelum = $post['jabatan_sebelum'];
        $this->jabatan_sesudah = $post['jabatan_sesudah'];
        $this->divisi_sebelum = $post['divisi_sebelum'];
        $this->divisi_sesudah = $post['divisi_sesudah'];
        $this->tanggal_sk = $post['tanggal_sk'];
        $this->nomor_sk = $post['nomor_sk'];

        return $this->db->update('tbl_mutasi', $this, array('id_mutasi' => $post['id_mutasi']));
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function delete($id_mutasi)
    {
        return $this->db->delete('tbl_mutasi', ['id_mutasi' => $id_mutasi]);
    }
    /*-----------------------------------------------------------------*/
}
