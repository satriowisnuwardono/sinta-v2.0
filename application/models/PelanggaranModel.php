<?php if (!defined('BASEPATH')) exit('No direct script accessallowed');

class PelanggaranModel extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'keterangan', 'label' => 'Keterangan', 'rules' => 'required'],
            ['field' => 'tanggal_mulai', 'label' => 'Tanggal Mulai', 'rules' => 'required'],
            ['field' => 'tanggal_berakhir', 'label' => 'Tanggal Berkahir', 'rules' => 'required'],
            ['field' => 'masa_berlaku', 'label' => 'Masa Berlaku', 'rules' => 'required']
        ];
    }
    /*------------------------------CREATE-----------------------------*/
    public function save()
    {
        $post = $this->input->post();

        $this->id_pelanggaran = uniqid();
        $this->id_pegawai = $post['id_pegawai'];
        $this->keterangan = $post['keterangan'];
        $this->tanggal_mulai = $post['tanggal_mulai'];
        $this->tanggal_berakhir = $post['tanggal_berakhir'];
        $this->masa_berlaku = $post['masa_berlaku'];

        $this->db->insert('tbl_pelanggaran', $this);
    }
    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function getAll()
    {
        $this->db->select('tbl_pegawai.nama, tbl_pelanggaran.*');
        $this->db->from('tbl_pelanggaran');
        $this->db->join('tbl_pegawai', 'tbl_pegawai.id_pegawai = tbl_pelanggaran.id_pegawai');
        $this->db->order_by('id_pelanggaran', 'DESC');

        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id_pelanggaran)
    {
        // return $this->db->get_where('tbl_pelanggaran', ['id_pelanggaran' => $id_pelanggaran])->row();

        $this->db->select('tbl_pegawai.nip, tbl_pegawai.nama, tbl_pelanggaran.*');
        $this->db->where('tbl_pelanggaran.id_pelanggaran', $id_pelanggaran);
        $this->db->from('tbl_pelanggaran');
        $this->db->join('tbl_pegawai', 'tbl_pegawai.id_pegawai = tbl_pelanggaran.id_pegawai', 'LEFT');

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

        $this->id_pelanggaran = $post['id_pelanggaran'];
        $this->id_pegawai = $post['id_pegawai'];
        $this->keterangan = $post['keterangan'];
        $this->tanggal_mulai = $post['tanggal_mulai'];
        $this->tanggal_berakhir = $post['tanggal_berakhir'];
        $this->masa_berlaku = $post['masa_berlaku'];

        $this->db->update('tbl_pelanggaran', $this, array('id_pelanggaran' => $post['id_pelanggaran']));
    }

    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function delete($id_pelanggaran)
    {
        return $this->db->delete('tbl_pelanggaran', ['id_pelanggaran' => $id_pelanggaran]);
    }

    /*-----------------------------------------------------------------*/
}
