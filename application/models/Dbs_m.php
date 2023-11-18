<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbs_m extends CI_Model {

    public function alumni($id = null)
    {
        $this->db->from('db_alumni');
        $this->db->where('ket','Aktif');
        $this->db->where('level','2');
        if($id != null){
            $this->db->where('id_alm', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    //chard jumlah alumni
    public function ipa($id = null)
    {
        $this->db->from('db_alumni');
        $this->db->where('ket','Aktif');
        $this->db->where('jurusan','IPA');
        if($id != null){
            $this->db->where('id_alm', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function ips($id = null)
    {
        $this->db->from('db_alumni');
        $this->db->where('ket','Aktif');
        $this->db->where('jurusan','IPS');
        if($id != null){
            $this->db->where('id_alm', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function kbc($id = null)
    {
        $this->db->from('db_alumni');
        $this->db->where('ket','Aktif');
        $this->db->where('jurusan','KBC');
        if($id != null){
            $this->db->where('id_alm', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    //chard kegiatan
    public function bekerja($id = null)
    {
        $this->db->from('vw_kegiatan');
        $this->db->where('st_kgt','Bekerja');
        if($id != null){
            $this->db->where('id_kegiatan', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function kuliah($id = null)
    {
        $this->db->from('vw_kegiatan');
        $this->db->where('st_kgt','Kuliah');
        if($id != null){
            $this->db->where('id_kegiatan', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function blmbekerja($id = null)
    {
        $this->db->from('vw_kegiatan');
        $this->db->where('st_kgt','Tidak Kuliah dan Bekerja');
        if($id != null){
            $this->db->where('id_kegiatan', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function klhbkj($id = null)
    {
        $this->db->from('vw_kegiatan');
        $this->db->where('st_kgt','Kuliah dan Bekerja');
        if($id != null){
            $this->db->where('id_kegiatan', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}