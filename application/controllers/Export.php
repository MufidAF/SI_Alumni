<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller {

	public function __construct(){
		parent::__construct();
		check_not_login();
		$this->load->model('user_m');
		$this->load->library('form_validation');
	}

	public function explpr()
	{
		check_not_login();
		$this->load->model('user_m');
		$data['row'] = $this->user_m->lpr();
		$this->load->view('hal2/expdata/explaporan', $data);
	}

	public function kuesioner()
	{
		check_not_login();
		$this->load->model('user_m');
		$data['row'] = $this->user_m->jawab();
		$this->load->view('hal2/expdata/expkuesioner', $data);
	}
	public function kuesioner2()
	{
		check_not_login();
		$this->load->model('user_m');
		$data['row'] = $this->user_m->vw_jawab2();
		$this->load->view('hal2/expdata/expkuesioner2', $data);
	}
	public function kuesioner3()
	{
		check_not_login();
		$this->load->model('user_m');
		$data['row'] = $this->user_m->vw_jawab3();
		$this->load->view('hal2/expdata/expkuesioner3', $data);
	}
	public function datakegiatan()
	{
		check_not_login();
		$this->load->model('user_m');
		$data['row'] = $this->user_m->vw_dtkgt();
		$this->load->view('hal2/expdata/expdatakegiatan', $data);
	}
}
