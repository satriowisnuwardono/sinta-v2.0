<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class JabatanModel extends CI_Model
{
    /*------------------------------CREATE-----------------------------*/
    public function save()
    {
        $post = $this->input->post();
        $this->id_departemen = $post['id_departemen'];
        $this->id_divisi = $post['id_divisi'];
        $this->nama_jabatan = $post['nama_jabatan'];

        $query = $this->db->insert('tbl_jabatan', $this);
    }

    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tbl_jabatan');
        $query = $this->db->get();

        return $query->result();
    }

    public function getDepartemen()
    {
        return $this->db->get('tbl_departemen')->result();
    }

    public function getDivisi($id_departemen)
    {
        $query = $this->db->get_where('tbl_divisi', ['id_departemen' => $id_departemen]);
        return $query;
    }

    public function getJabatan($id_divisi)
    {
        $query = $this->db->get_where('tbl_jabatan', ['id_divisi' => $id_divisi]);
        return $query;
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/

    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function delete($id_jabatan)
    {
        return $this->db->delete('tbl_jabatan', ['id_jabatan' => $id_jabatan]);
    }
    /*-----------------------------------------------------------------*/
}
