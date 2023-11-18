<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('user_m');
	}

	public function index()
	{
		$this->load->view('hal1/home');
    }
    public function Berita()
    {
		$this->load->model('user_m');
		$data["row"] = $this->user_m->berita();
        $this->load->view('hal1/berita', $data); 
    }
    public function Register()
    {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nis','NISN','callback_nis_check|min_length[10]|max_length[10]|required');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('jeniskelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('agama','Agama','required');
		$this->form_validation->set_rules('tempatlahir','Tempat Lahir','required');
		$this->form_validation->set_rules('tanggallahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('jurusan','Jurusan','required');
		$this->form_validation->set_rules('tahunmasuk','Tahun Masuk','required');
		$this->form_validation->set_rules('tahunlulus','Tahun Lulus','required');
		$this->form_validation->set_rules('nohp','No Hanpone/WA','required');
		$this->form_validation->set_rules('email','Email','callback_email_check|required');
		$this->form_validation->set_rules('password','Password','required');
		

		$this->form_validation->set_message('required','%s Harap Di Isi');
		$this->form_validation->set_message('is_unique','%s Sudah Terdaftar');
		$this->form_validation->set_message('min_length','%s masukan minimal 10 karakter');
		$this->form_validation->set_message('max_length','%s masukan Maksimal 10 karakter');
		if ($this->form_validation->run()== FALSE) {
			$this->load->view('hal1/register');
		}else
		{
			$post = $this->input->post(null, TRUE);
			$this->user_m->addp($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil dikirim, silahkan tunggu konfirmasi dari admin untuk melanjutkan.')</script>";
			}$this->load->view('hal1/register');
		}    
        
    }
    public function Contact()
    {
        $this->load->view('hal1/contact'); 
    }
    public function Carialumni()
    {
        $this->load->model('user_m');
		$data['row'] = $this->user_m->calmp();
        $this->load->view('hal1/carialumni', $data); 
    }

	//nis check
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

	//tampil data berita
	//public function berita()
	//{

	//}
}
?>