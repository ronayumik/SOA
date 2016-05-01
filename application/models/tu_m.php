<?php
Class Tu_m extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
	
	//--untuk hasilkan query
	public function list_oprec()
    {
        $data = $this->db->query("select * from jadwal order by j_tgl_oprek_tutup DESC");
        return $data;
    }

    public function list_mk() {
        $data = $this->db->query("select * from list_mata_kuliah where lmk_id != 0");
        return $data;
    }

    public function list_dosen() {
        $data = $this->db->query("select * from user_ where u_hak_akses = 'DOSEN'");
        return $data;   
    }

    public function simpan_kelas($id_kelas, $id_dosen, $kelas, $id_mk) {
        $data = $this->db->query("update kelas set k_id_dosen = '$id_dosen', k_kelas = '$kelas', k_matkul='$id_mk' where k_id_kelas = '$id_kelas'");
        return $data;

    }

    public function hapus_kelas($id_kelas) {
        $data = $this->db->query("DELETE from kelas where k_id_kelas = '$id_kelas'");
        return $data;
    }

    public function tambah_kelas($id_dosen, $kelas, $id_jadwal, $ruang, $hari, $jam_mulai, $jam_selesai, $id_mk) {
        $data = $this->db->query(" INSERT INTO kelas (
                                        k_id_dosen, k_kelas, k_id_jadwal, k_ruang,
                                        k_waktu_hari, k_waktu_jam_mulai, k_waktu_jam_selesai, k_matkul, k_nrp_asisten
                                    ) VALUES (
                                        '$id_dosen', '$kelas', '$id_jadwal', '$ruang', '$hari', '$jam_mulai',
                                        '$jam_selesai', '$id_mk', '0'
                                    )
                                ");

        return $data;
    }

    public function hapus_oprec($id_jadwal) {
        $data = $this->db->query("DELETE FROM jadwal where j_id = '$id_jadwal'");
        return $data;
    }

    public function tambah_oprec($semester, $tahun_ajaran, $waktu_buka, $waktu_tutup) {
        
        $data = $this->db->query("INSERT INTO jadwal (j_tahun, j_semester, j_tgl_oprek_buka, j_tgl_oprek_tutup) VALUES ('$tahun_ajaran', '$semester','$waktu_buka','$waktu_tutup')");
        return $data;
    }

    public function edit_oprec_exist($id_oprec, $buka, $tutup) {
        $data = $this->db->query("UPDATE jadwal set j_tgl_oprek_buka = '$buka', j_tgl_oprek_tutup = '$tutup' where j_id = '$id_oprec'");
        return $data;
    }





    public function new_id_oprec() {
        $sql    = "INSERT INTO jadwal (j_tahun, j_semester, j_tgl_oprek_buka, j_tgl_oprek_tutup) VALUES ('','','','')";
        $this->db->query($sql);
    }

    public function get_last_id() {
        $sql    = "select max(j_id) as j_id from jadwal";
        return $this->db->query($sql);
    }

    public function update_semester($id_jadwal, $semester) {
        return $this->db->query("update jadwal set j_semester = '$semester' where j_id = '$id_jadwal'");
    }

    public function update_tahun($id_jadwal, $tahun) {
        return $this->db->query("update jadwal set j_tahun = '$tahun' where j_id = '$id_jadwal'");
    }

    public function list_pengumuman()
    {
        $query = $this->db->query("select * from pengumuman");
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
}
    
?>