<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PelatihanModel extends CI_Model
{

    public function rules()
    {
        return [
            ['field' => 'judul', 'label' => 'Judul', 'rules' => 'required'],
            ['field' => 'nomor_sertifikat', 'label' => 'Nomor Sertifikat', 'rules' => 'required'],
            ['field' => 'tanggal_mulai', 'label' => 'Tanggal Mulai', 'rules' => 'required'],
            ['field' => 'tanggal_berakhir', 'label' => 'Tanggal Berakhir', 'rules' => 'required'],
            ['field' => 'penyelenggara', 'label' => 'Penyelenggara', 'rules' => 'required'],
        ];
    }
    /*------------------------------CREATE-----------------------------*/
    public function save()
    {
        $post = $this->input->post();

        $this->id_pelatihan = uniqid();
        $this->id_pegawai = $post['id_pegawai'];
        $this->tanggal_mulai = $post['tanggal_mulai'];
        $this->tanggal_berakhir = $post['tanggal_berakhir'];
        $this->judul = $post['judul'];
        $this->nomor_sertifikat = $post['nomor_sertifikat'];
        $this->penyelenggara = $post['penyelenggara'];

        $this->db->insert('tbl_pelatihan', $this);
    }
    /*-----------------------------------------------------------------*/
    /*-------------------------------READ------------------------------*/
    public function getAll()
    {
        $this->db->select('tbl_pegawai.nama, tbl_pelatihan.*');
        $this->db->from('tbl_pelatihan');
        $this->db->join('tbl_pegawai', 'tbl_pegawai.id_pegawai = tbl_pelatihan.id_pegawai', 'LEFT');
        $this->db->order_by('id_pelatihan', 'DESC');

        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id_pelatihan)
    {
        $this->db->select('tbl_pegawai.nip, tbl_pegawai.nama, tbl_pelatihan.*');
        $this->db->where('tbl_pelatihan.id_pelatihan', $id_pelatihan);
        $this->db->from('tbl_pelatihan');
        $this->db->join('tbl_pegawai', 'tbl_pegawai.id_pegawai = tbl_pelatihan.id_pegawai', 'LEFT');

        $query = $this->db->get_where();
        return $query->row();
    }

    public function getPegawai()
    {
        return $this->db->get('tbl_pegawai')->result();
    }
    /*-----------------------------------------------------------------*/
    /*------------------------------UPDATE-----------------------------*/
    public function update()
    {
        $post = $this->input->post();

        $this->id_pelatihan = $post['id_pelatihan'];
        $this->id_pegawai = $post['id_pegawai'];
        $this->tanggal_mulai = $post['tanggal_mulai'];
        $this->tanggal_berakhir = $post['tanggal_berakhir'];
        $this->judul = $post['judul'];
        $this->nomor_sertifikat = $post['nomor_sertifikat'];
        $this->penyelenggara = $post['penyelenggara'];

        $this->db->update('tbl_pelatihan', $this, array('id_pelatihan' => $post['id_pelatihan']));
    }
    /*-----------------------------------------------------------------*/
    /*------------------------------DELETE-----------------------------*/
    public function delete($id_pelatihan)
    {
        return $this->db->delete('tbl_pelatihan', ['id_pelatihan' => $id_pelatihan]);
    }
    /*-----------------------------------------------------------------*/
}
