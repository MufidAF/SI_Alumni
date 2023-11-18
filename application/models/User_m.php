<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    //login data
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('db_alumni');
        $this->db->where('email', $post['email']);
        $this->db->where('psw', $post['password']);
        $this->db->where('ket', 'Aktif');
        $query = $this->db->get();
        return $query;

    }

    //ambil data kelola
    public function get($id = null)
    {
        $this->db->from('db_alumni');
        $this->db->where('ket','Aktif');
        if($id != null){
            $this->db->where('id_alm', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    //ambil data regristrasi
    public function reg($id = null)
    {
        $this->db->from('db_alumni');
        $this->db->where('ket','Tidak Aktif');
        if($id != null){
            $this->db->where('id_alm', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    //ambil kelola data kegiatan
    public function vwkgt($id = null)
    {
        $this->db->from('vw_kegiatan');
        if($id != null){
            $this->db->where('id_kegiatan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    //ambil data kegiatan
    public function kegiatan()
    {
        $id = $this->fungsi->user_login()->id_alm;
        $this->db->from('db_kegiatan');
        if($id != null){
            $this->db->where('id_alm', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    //ambil data berita
    public function brt($id = null)
    {
        $this->db->from('db_berita');
        if($id != null){
            $this->db->where('id_berita', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    //ambil data orangtua
    public function dtortu()
    {
        $id = $this->fungsi->user_login()->id_alm;
        $this->db->from('data_orangtua');
        if($id != null){
            $this->db->where('id_alm', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    //ambil kelola data view ortu
    public function vwortu($id = null)
    {
        $this->db->from('vw_ortu');
        if($id != null){
            $this->db->where('id_alm', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    //ambil data vw berita
    public function berita($id = null)
    {
        $this->db->from('vw_berita');
        if($id != null){
            $this->db->where('id_berita', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    //history berita
    public function historybrt()
    {
        $id = $this->fungsi->user_login()->id_alm;
        $this->db->from('db_berita');
        if($id != null){
            $this->db->where('id_alm', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    //laporan
    public function lpr($id = null)
    {
        $this->db->from('vw_laporan');
        if($id != null){
            $this->db->where('nis', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    //ambil data cari alumni

    public function calma($id = null)
    {
        $this->db->from('vw_cari_a');
        if($id != null){
            $this->db->where('nis', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function calmp($id = null)
    {
        $this->db->from('vw_cari_p');
        if($id != null){
            $this->db->where('nis', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // ambil data kuesioner
    public function kuesioner($id = null)
    {
        $this->db->from('kuesioner');
        if($id != null){
            $this->db->where('id_soal', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    //ambil data jawab 2
    public function jawab2()
    {
        $id = $this->fungsi->user_login()->id_alm;
        $this->db->from('jawaban2');
        if($id != null){
            $this->db->where('id_alm', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    //ambil data keterang qs
    public function ketkq()
    {
        $id = $this->fungsi->user_login()->id_alm;
        $this->db->from('ketkq');
        if($id != null){
            $this->db->where('id_alm', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    //ambil data keterangan sudah/belum kuesioner di isikan
    public function ketkuesioner($id = null)
    {
        $this->db->from('vw_ketquis');
        if($id != null){
            $this->db->where('id_alm', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    // ambil data jawab kuesioner
    public function jawab($id = null)
    {
        $this->db->from('jawaban');
        if($id != null){
            $this->db->where('id_alm', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    // ambil data jawab kuesioner
    public function vw_jawab2($id = null)
    {
        $this->db->from('vw_kuesioner2');
        if($id != null){
            $this->db->where('id_jwb', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function vw_jawab3($id = null)
    {
        $this->db->from('vw_kuesioner3');
        if($id != null){
            $this->db->where('id_jwb', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    //ambil data vw data kegiatan
    public function vw_dtkgt($id = null)
    {
        $this->db->from('vw_datakgt');
        if($id != null){
            $this->db->where('th_lulus', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    
    // ambil data sosmed
    public function sosmed()
    {
        $id = $this->fungsi->user_login()->id_alm;
        $this->db->from('db_sosmed');
        if($id != null){
            $this->db->where('id_alm', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    //ambil data loker
    public function loker($id= null)
    {
        $this->db->from('loker');
        if($id != null){
            $this->db->where('id_loker', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    //ambil data loker
    public function vwjmluniv($id= null)
    {
        $this->db->from('vw_countuniv');
        if($id != null){
            $this->db->where('id_kegiatan', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    //tambah data
    public function add($post){
        $params['nis'] = $post['nis'];
        $params['nama'] = $post['nama'];
        $params['jk'] = $post['jeniskelamin'];
        $params['agama'] = $post['agama'];
        $params['t_lahir'] = $post['tempatlahir'];
        $params['tgl_lahir'] = $post['tanggallahir'];
        $params['alamat'] = $post['alamat'];
        $params['jurusan'] = $post['jurusan'];
        $params['th_masuk'] = $post['tahunmasuk'];
        $params['th_lulus'] = $post['tahunlulus'];
        $params['no_hp'] = $post['nohp'];
        $params['email'] = $post['email'];
        $params['psw'] = $post['password'];
        $params['level'] = $post['level'];
        $this->db->insert('db_alumni', $params);
    }
    //add registrasi
    public function addp($post){
        $params['nis'] = $post['nis'];
        $params['nama'] = $post['nama'];
        $params['jk'] = $post['jeniskelamin'];
        $params['agama'] = $post['agama'];
        $params['t_lahir'] = $post['tempatlahir'];
        $params['tgl_lahir'] = $post['tanggallahir'];
        $params['alamat'] = $post['alamat'];
        $params['jurusan'] = $post['jurusan'];
        $params['th_masuk'] = $post['tahunmasuk'];
        $params['th_lulus'] = $post['tahunlulus'];
        $params['no_hp'] = $post['nohp'];
        $params['email'] = $post['email'];
        $params['psw'] = $post['password'];
        $this->db->insert('db_alumni', $params);
    }
    
    //edit pengguna admin
    public function editp($post){
        $params['nama'] = $post['nama'];
        $params['jk'] = $post['jeniskelamin'];
        $params['agama'] = $post['agama'];
        $params['t_lahir'] = $post['tempatlahir'];
        $params['tgl_lahir'] = $post['tanggallahir'];
        $params['alamat'] = $post['alamat'];
        $params['jurusan'] = $post['jurusan'];
        $params['th_masuk'] = $post['tahunmasuk'];
        $params['th_lulus'] = $post['tahunlulus'];
        $params['no_hp'] = $post['nohp'];
        $params['email'] = $post['email'];
        $params['psw'] = $post['password'];
        $this->db->where('id_alm', $post['id_alm']);
        $this->db->update('db_alumni', $params);
    }

    //ubah password
    public function editpsw($post){
        $params['psw'] = $post['konfpsw'];
        $this->db->where('id_alm', $post['id']);
        $this->db->update('db_alumni', $params);
    }

    //edit aktivasi
    public function editketerangan($post){
        
        $params['ket'] = $post['aktivasi'];
        $paramss['id_alm'] = $post['id'];
        $this->db->where('id_alm', $post['id']);
        $this->db->update('db_alumni', $params);
        $this->db->insert('db_kegiatan', $paramss);
        $this->db->insert('data_orangtua', $paramss);
        $this->db->insert('db_sosmed', $paramss);
        $this->db->insert('ketkq', $paramss);
        $this->db->insert('jawaban2', $paramss);
    }

    //delete dat alumni
    public function del($id)
	{
		$this->db->where('id_alm', $id);
		$this->db->delete('db_alumni');
	}
    //hapus berita
    public function delbrt($id)
	{
		$this->db->where('id_berita', $id);
		$this->db->delete('db_berita');
	}
    //delete quesioner
    public function delqs($id)
	{
		$this->db->where('id_jawab', $id);
		$this->db->delete('jawaban');
	}
    //delete loker
    public function delloker($id)
	{
		$this->db->where('id_loker', $id);
		$this->db->delete('loker');
	}
    
}