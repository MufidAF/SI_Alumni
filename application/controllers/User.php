<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		check_not_login();
		$this->load->model('user_m');
		$this->load->library('form_validation');

	}

	public function index()
	{
		
		$data['row'] = $this->user_m->get();
		$this->template->load('hal2/template','hal2/user/data_alumni',$data);
	}

	//kelola data segistrasi
	public function DataRegister()
	{
		check_not_login();
		$this->load->model('user_m');
		$data['row'] = $this->user_m->reg();
		$this->template->load('hal2/template','hal2/user/data_register',$data);
	}

	//kelola data kegiatan
	public function Datakegiatan()
	{
		check_not_login();
		$this->load->model('user_m');
		$data['row'] = $this->user_m->vwkgt();
		$this->template->load('hal2/template','hal2/user/data_kegiatan',$data);
	}

	//kelola data orangtua
	public function Dataortu()
	{
		check_not_login();
		$this->load->model('user_m');
		$data['row'] = $this->user_m->vwortu();
		$this->template->load('hal2/template','hal2/user/data_ortu',$data);
	}
	
	//kelola data berita
	public function Databerita()
	{
		check_not_login();
		$this->load->model('user_m');
		$data['row'] = $this->user_m->brt();
		$this->template->load('hal2/template','hal2/user/data_berita',$data);
	}
	//tampil berita
	public function berita()
	{
		check_not_login();
		$this->load->model('user_m');
		$data['row'] = $this->user_m->brt();
		$this->template->load('hal2/template','hal2/berita',$data);
	}

	//kelola data kuesioner
	public function Datakuesioner()
	{
		check_not_login();
		$this->load->model('user_m');
		$data['row'] = $this->user_m->ketkuesioner();
		$this->template->load('hal2/template','hal2/user/data_kuesioner',$data);
	}
	//tampil edit quesioner
	public function tampilqs()
	{
		check_not_login();
		$this->template->load('hal2/template','hal2/user/edit_quesioner');
	}
	//ambil data loker dari user m
	public function dataloker()
	{
		check_not_login();
		$this->load->model('user_m');
		$data['row'] = $this->user_m->loker();
		$this->template->load('hal2/template','hal2/user/data_loker',$data);
	}
	//ambil data laporan dari user m
	public function laporan()
	{
		check_not_login();
		$this->load->model('user_m');
		$data['row'] = $this->user_m->lpr();
		$this->template->load('hal2/template','hal2/user/laporan',$data);
	}



		//Tambah Pengguna Baru Admin
	public function Add()
	{
		check_not_login();

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('nohp','No Hanpone/WA','required');
		$this->form_validation->set_rules('email','Email','callback_email_check|required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('level','Level','required');

		$this->form_validation->set_message('required','%s Harap Di Isi');
		$this->form_validation->set_message('is_unique','%s Sudah Terdaftar');
		$this->form_validation->set_message('min_length','%s masukan minimal 10 karakter');
		$this->form_validation->set_message('max_length','%s masukan Maksimal 10 karakter');
		if ($this->form_validation->run()== FALSE) {
			$this->template->load('hal2/template','hal2/user/user_form_add');
		}else
		{
			$post = $this->input->post(null, TRUE);
			$this->user_m->add($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil disimpan')</script>";
			}echo "<script>window.location='".site_url('user/add')."';</script>";
		}
		
	}
	//edit data alumni admin
	public function edit($id)
	{
		check_not_login();
		
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','callback_email_check|required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('level','Level','required');


		$this->form_validation->set_message('required','%s Harap Di Isi');
		$this->form_validation->set_message('is_unique','%s Sudah Terdaftar');
		$this->form_validation->set_message('min_length','%s masukan minimal 10 karakter');
		$this->form_validation->set_message('max_length','%s masukan Maksimal 10 karakter');
		if ($this->form_validation->run()== FALSE) {
			$query = $this->user_m->get($id);
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
				$this->template->load('hal2/template','hal2/user/user_form_edit', $data);
			}else{
				echo "<script> alert('Data tidak ditemukan'); </script>";
			}
		}else
		{
			$post = $this->input->post(null, TRUE);
			$this->user_m->editp($post);
			if($this->db->affected_rows() > 0){
				echo "<script> alert('Data berhasil disimpan'); </script>";
			}echo "<script> window.location='".site_url('user')."'; </script>";
		}
		
	}

	//update aktivasi
	public function editket()
	{
		$post = $this->input->post(null, TRUE);
		$this->user_m->editketerangan($post);
		if($this->db->affected_rows() > 0){
			echo "<script> alert('Data berhasil disimpan'); </script>";
		}echo "<script> window.location='".site_url('user/dataregister')."'; </script>";
	}

	//view data kuesioner
	public function viewkq()
	{
		check_not_login();
		$this->template->load('hal2/template','hal2/user/view_data_kuesioner');
	}

	//delete data alumni
	public function del()
	{
		$id = $this->input->post('id_alm');
		$this->user_m->del($id);

		if($this->db->affected_rows() > 0){
			echo "<script>alert('Data berhasil di Hapus')</script>";
		}echo "<script>window.location='".site_url('user')."';</script>";
	}
	//hapus data registrasi
	public function delreg()
	{
		$id = $this->input->post('id_alm');
		$this->user_m->del($id);

		if($this->db->affected_rows() > 0){
		}echo "<script>window.location='".site_url('user/dataregister')."';</script>";
	}
	//hapus data berita
	public function delberita()
	{
		$id = $this->input->post('id_berita');
		$this->user_m->delbrt($id);

		if($this->db->affected_rows() > 0){
			echo "<script>alert('Data berhasil di Hapus')</script>";
		}echo "<script>window.location='".site_url('user/databerita')."';</script>";
	}

	//hapus delkuesioner
	public function delkuesioner()
	{
		$id = $this->input->post('id_jawab');
		$this->user_m->delqs($id);
		if($this->db->affected_rows() > 0){
			echo "<script>alert('Data berhasil di Hapus')</script>";
		}echo "<script>window.location='".site_url('user/datakuesioner')."';</script>";
	}
	//detl loker
	public function delloker()
	{
		$id = $this->input->post('id_loker');
		$this->user_m->delloker($id);
		if($this->db->affected_rows() > 0){
			echo "<script>alert('Data berhasil di Hapus')</script>";
		}echo "<script>window.location='".site_url('user/dataloker')."';</script>";
	}

	//username check
	public function nis_check(){
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM db_alumni WHERE nis = '$post[nis]'");
		if($query->num_rows() > 0){
			$this->form_validation->set_message('nis_check','%s Sudah Terdaftar');
			return FALSE;
		}else{
			return TRUE;
		}

	}
	//email check
	public function email_check(){
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM db_alumni WHERE email = '$post[email]'");
		if($query->num_rows() > 0){
			$this->form_validation->set_message('email_check','%s Sudah Terdaftar');
			return FALSE;
		}else{
			return TRUE;
		}
	}

	//edit kuesioner
	public function editqs(){
		$id = $this->input->post('id',TRUE);
		$a = $this->input->post('e1', TRUE);
		$b = $this->input->post('e2', TRUE);
		$c = $this->input->post('e3', TRUE);
		$d = $this->input->post('e4', TRUE);
		$e = $this->input->post('e5', TRUE);
		$f = $this->input->post('e6', TRUE);
		$g = $this->input->post('e7', TRUE);
		$h = $this->input->post('e8', TRUE);
		$i = $this->input->post('e9', TRUE);
		$j = $this->input->post('e10', TRUE);
		$k = $this->input->post('e11', TRUE);
		$l = $this->input->post('e12', TRUE);

		$data = array(
			'id_soal'=>$id,
			's1'=> $a,
			's2'=> $b,
			's3'=> $c,
			's4'=> $d,
			's5'=> $e,
			's6'=> $f,
			's7'=> $g,
			's8'=> $h,
			's9'=> $i,
			's10'=> $j,
			's11'=> $k,
			's12'=> $l,
		);
		$this->db->where('id_soal', $id);
		$this->db->Update('kuesioner', $data);
		if($this->db->affected_rows() > 0){
			echo "<script> alert('Data berhasil di ubah'); window.location='".site_url('user/tampilqs')."'; </script>";
		}else{
			echo "Gagala Update";
		}
	}

	//tambah loker
	public function tambahloker(){
		$a = $this->input->post('nm_pt', TRUE);
		$b = $this->input->post('deskripsi', TRUE);
		$c = $this->input->post('link', TRUE);

		$data = array(
			'nm_pt'=> $a,
			'deskripsi'=> $b,
			'link'=> $c,
		);
		$this->db->insert('loker', $data);
		if($this->db->affected_rows() > 0){
			echo "<script> alert('Data berhasil di ubah'); window.location='".site_url('user/dataloker')."'; </script>";
		}else{
			echo "Gagala iNSERT";
		}
	}
	//tambah loker
	public function editloker(){
		$id= $this->input->post('id_loker', TRUE);
		$a = $this->input->post('nm_pt', TRUE);
		$b = $this->input->post('deskripsi', TRUE);
		$c = $this->input->post('link', TRUE);

		$data = array(
			'id_loker'=> $id,
			'nm_pt'=> $a,
			'deskripsi'=> $b,
			'link'=> $c,
		);
		$this->db->where('id_loker', $id);
		$this->db->update('loker', $data);
		if($this->db->affected_rows() > 0){
			echo "<script> alert('Data berhasil di ubah'); window.location='".site_url('user/dataloker')."'; </script>";
		}else{
			echo "Gagala update";
		}
	}
}
?>