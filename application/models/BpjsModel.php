<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class BpjsModel extends CI_Model
{

    public function rules()
    {
        return [
            ['field' => 'nomor_bpjs_ks', 'label' => 'BPJS Kesehatan', 'rules' => 'required'],
            ['field' => 'nama_klinik', 'label' => 'Nama Klinik', 'rules' => 'required'],
            ['field' => 'nomor_bpjs_tk', 'label' => 'BPJS Ketenagakerjaan', 'rules' => 'required'],

        ];
    }
    /*------------------------------CREATE-----------------------------*/

    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function getAll()
    {
        $this->db->select('tbl_pegawai.nama, tbl_bpjs.*');
        $this->db->from('tbl_pegawai');
        $this->db->join('tbl_bpjs', 'tbl_pegawai.id_pegawai = tbl_bpjs.id_pegawai', 'LEFT');
        $this->db->order_by('id_pegawai', 'DESC');

        $query = $this->db->get();

        return $query->result();
    }

    public function getById($id_bpjs)
    {
        return $this->db->get_where('tbl_bpjs', ['id_bpjs' => $id_bpjs])->row();
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function update()
    {
        $post = $this->input->post();
        $this->id_bpjs = $post['id_bpjs'];
        $this->id_pegawai = $post['id_pegawai'];
        $this->nomor_bpjs_ks = $post['nomor_bpjs_ks'];
        $this->nama_klinik = $post['nama_klinik'];
        $this->nomor_bpjs_tk = $post['nomor_bpjs_tk'];

        return $this->db->update('tbl_bpjs', $this, array('id_bpjs' => $post['id_bpjs']));
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/

    /*-----------------------------------------------------------------*/
}
