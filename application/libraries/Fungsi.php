<?php

Class Fungsi {

    protected $ci;

    public function __construct() {
        $this->ci =& get_instance();
    }

    function user_login() {
        $this->ci->load->model('user_m');
        $user_id = $this->ci->session->userdata('id_alm');
        $user_data = $this->ci->user_m->get($user_id)->row();
        return $user_data;
    }
    
    //fungsi buat chard di dasboard
    //jumlah alumni
    public function count_alumni(){
        $this->ci->load->model('dbs_m');
        return $this->ci->dbs_m->alumni()->num_rows();
    }
    public function count_ipa(){
        $this->ci->load->model('dbs_m');
        return $this->ci->dbs_m->ipa()->num_rows();
    }
    public function count_ips(){
        $this->ci->load->model('dbs_m');
        return $this->ci->dbs_m->ips()->num_rows();
    }
    public function count_kbc(){
        $this->ci->load->model('dbs_m');
        return $this->ci->dbs_m->kbc()->num_rows();
    }

    // kegiatan
    public function count_bekerja(){
        $this->ci->load->model('dbs_m');
        return $this->ci->dbs_m->bekerja()->num_rows();
    }
    public function count_kuliah(){
        $this->ci->load->model('dbs_m');
        return $this->ci->dbs_m->kuliah()->num_rows();
    }
    public function count_blmbekerja(){
        $this->ci->load->model('dbs_m');
        return $this->ci->dbs_m->blmbekerja()->num_rows();
    }
    public function count_klhdanbkj(){
        $this->ci->load->model('dbs_m');
        return $this->ci->dbs_m->klhbkj()->num_rows();
    }
    //kuesioner
    public function soal(){
        $this->ci->load->model('user_m');
        return $this->ci->user_m->kuesioner()->row();
    }
    public function jwb2(){
        $this->ci->load->model('user_m');
        return $this->ci->user_m->jawab2()->row();
    }
    public function nokq(){
        $this->ci->load->model('user_m');
        return $this->ci->user_m->ketkq()->row();
    }
}