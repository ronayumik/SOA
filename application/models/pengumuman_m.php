<?php
Class Pengumuman_m extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function list_pengumuman()
    {
        $query = $this->db->query("select * from pengumuman where view = 1 order by p_id desc");
        return $query;
    }

     public function edit_pengumuman($id)
    {
        $query = $this->db->query("select * from pengumuman where p_id='$id'");
        return $query;
    }

     public function simpan_pengumuman($id)
    {
        $p_judul = $this->input->post('p_judul');
        $p_isi = $this->input->post('p_isi');
        $query = $this->db->query("update pengumuman set p_judul = '$p_judul', p_isi = '$p_isi' where p_id='$id'");
        return $query;
    }

    public function tambah_pengumuman()
    {
        $p_judul = $this->input->post('p_judul');
        $p_isi = $this->input->post('p_isi');
        $query = $this->db->query("insert into pengumuman(p_judul,p_isi) values('$p_judul','$p_isi')");
        return $query;
    }
    
    public function hapus_pengumuman($id)
    {
        $this->db->query("update pengumuman set view = 0 where p_id = '$id'");
    }

}
    
?>