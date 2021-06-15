<?php if (!defined('BASEPATH')) exit('No direct script accessallowed');

class PenghargaanModel extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'keterangan', 'label' => 'Keterangan', 'rules' => 'required'],
            ['field' => 'tanggal_keterangan', 'label' => 'Tanggal Keterangan', 'rules' => 'required']
        ];
    }
    /*------------------------------CREATE-----------------------------*/
    public function save()
    {
        $post = $this->input->post();

        $this->id_penghargaan = uniqid();
        $this->id_pegawai = $post['id_pegawai'];
        $this->keterangan = $post['keterangan'];
        $this->tanggal_keterangan = $post['tanggal_keterangan'];

        $this->db->insert('tbl_penghargaan', $this);
    }
    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function getAll()
    {
        $this->db->select('tbl_pegawai.nama, tbl_penghargaan.*');
        $this->db->from('tbl_penghargaan');
        $this->db->join('tbl_pegawai', 'tbl_pegawai.id_pegawai = tbl_penghargaan.id_pegawai');
        $this->db->order_by('id_penghargaan', 'DESC');

        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id_penghargaan)
    {
        // return $this->db->get_where('tbl_penghargaan', ['id_penghargaan' => $id_penghargaan])->row();

        $this->db->select('tbl_pegawai.nip, tbl_pegawai.nama, tbl_penghargaan.*');
        $this->db->where('tbl_penghargaan.id_penghargaan', $id_penghargaan);
        $this->db->from('tbl_penghargaan');
        $this->db->join('tbl_pegawai', 'tbl_pegawai.id_pegawai = tbl_penghargaan.id_pegawai', 'LEFT');

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

        $this->id_penghargaan = $post['id_penghargaan'];
        $this->id_pegawai = $post['id_pegawai'];
        $this->keterangan = $post['keterangan'];
        $this->tanggal_keterangan = $post['tanggal_keterangan'];

        $this->db->update('tbl_penghargaan', $this, array('id_penghargaan' => $post['id_penghargaan']));
    }

    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function delete($id_penghargaan)
    {
        return $this->db->delete('tbl_penghargaan', ['id_penghargaan' => $id_penghargaan]);
    }

    /*-----------------------------------------------------------------*/
}
