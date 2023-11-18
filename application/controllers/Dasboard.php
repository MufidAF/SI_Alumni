<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		check_not_login();
		$this->load->model('user_m');
		$this->load->library('form_validation');

	}

	public function index()
	{
		check_not_login();
		$this->load->model('user_m');
		$data["row"] = $this->user_m->vwjmluniv();
		$this->template->load('hal2/template','hal2/dasboard',$data);
	}

	public function Profil()
	{
		check_not_login();
		$this->load->model('user_m');
		$data["row"] = $this->user_m->sosmed();
		$this->template->load('hal2/template','hal2/profil',$data);
	}

	public function Orangtua()
	{
		check_not_login();
		$this->load->model('user_m');
		$data["row"] = $this->user_m->dtortu();
		$this->template->load('hal2/template','hal2/halorangtua',$data);
	}

	public function Kegiatan()
	{
		check_not_login();
		$this->load->model('user_m');
		$data["row"] = $this->user_m->kegiatan();
		$this->template->load('hal2/template','hal2/kegiatan',$data);
	}

	public function Berita()
	{
		check_not_login();
		$this->load->model('user_m');
		$data["row"] = $this->user_m->berita();
		$this->template->load('hal2/template','hal2/berita',$data);
	}
	//cari alumni
	public function Carialumni()
	{
		$this->load->model('user_m');
		$data['row'] = $this->user_m->calma();
		$this->template->load('hal2/template','hal2/carialumni',$data);
		
	}

	//kuesioner
	public function kuesioner()
	{
		$this->template->load('hal2/template','hal2/kuesioner');
		
	}
	public function kuesioner2()
	{
		$this->template->load('hal2/template','hal2/kuesioner2');
		
	}
	public function kuesioner3()
	{
		$this->template->load('hal2/template','hal2/kuesioner3');
		
	}
	public function kuesioner4()
	{
		$this->template->load('hal2/template','hal2/kuesioner4');
		
	}

	//tampil data loker
	public function tploker()
	{
		check_not_login();
		$this->load->model('user_m');
		$data['row'] = $this->user_m->loker();
		$this->template->load('hal2/template','hal2/loker',$data);
	}


	//edit profil
	public function editprofil()
	{
		check_not_login();
		$config['upload_path']          = './asset/foto_profil/';
		$config['allowed_types']        = 'jpg|png|PNG';
		$config['max_size']             = 2048;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('idprofil'))
		{
			$a = $this->input->post('id_alm', TRUE);
			$b = $this->input->post('nama', TRUE);
			$c = $this->input->post('jeniskelamin', TRUE);
			$d = $this->input->post('agama', TRUE);
			$e = $this->input->post('tempatlahir', TRUE);
			$f = $this->input->post('tanggallahir', TRUE);
			$g = $this->input->post('alamat', TRUE);
			$h = $this->input->post('jurusan', TRUE);
			$i = $this->input->post('tahunmasuk', TRUE);
			$j = $this->input->post('tahunlulus', TRUE);
			$k = $this->input->post('nohp', TRUE);
			$l = $this->input->post('ig', TRUE);
			$m = $this->input->post('tw', TRUE);
			$o = $this->input->post('fb', TRUE);
			$p = $this->input->post('yt', TRUE);
			

			$data = array(
				'id_alm'=> $a,
				'nama'=> $b,
				'jk'=> $c,
				'agama'=> $d,
				't_lahir'=> $e,
				'tgl_lahir'=> $f,
				'alamat'=> $g,
				'jurusan'=> $h,
				'th_masuk'=> $i,
				'th_lulus'=> $j,
				'no_hp'=> $k,
				
			);
			$dataa = array(
				'ig'=> $l,
				'tw'=> $m,
				'fb'=> $o,
				'yt'=> $p,
			);
			$this->db->where('id_alm', $a);
			$this->db->update('db_alumni', $data);
			$this->db->where('id_alm', $a);
			$this->db->update('db_sosmed', $dataa);
			if($this->db->affected_rows() > 0){
				echo "<script> alert('Data berhasil disimpan'); </script>";
			}echo "<script> window.location='".site_url('dasboard/profil')."'; </script>";

		}
		else
		{
			$foto = $this->upload->data();
			$foto = $foto['file_name'];
			$a = $this->input->post('id_alm', TRUE);
			$b = $this->input->post('nama', TRUE);
			$c = $this->input->post('jeniskelamin', TRUE);
			$d = $this->input->post('agama', TRUE);
			$e = $this->input->post('tempatlahir', TRUE);
			$f = $this->input->post('tanggallahir', TRUE);
			$g = $this->input->post('alamat', TRUE);
			$h = $this->input->post('jurusan', TRUE);
			$i = $this->input->post('tahunmasuk', TRUE);
			$j = $this->input->post('tahunlulus', TRUE);
			$k = $this->input->post('nohp', TRUE);
			$l = $this->input->post('ig', TRUE);
			$m = $this->input->post('tw', TRUE);
			$o = $this->input->post('fb', TRUE);
			$p = $this->input->post('yt', TRUE);

			$data = array(
				'id_alm'=> $a,
				'nama'=> $b,
				'jk'=> $c,
				'agama'=> $d,
				't_lahir'=> $e,
				'tgl_lahir'=> $f,
				'alamat'=> $g,
				'jurusan'=> $h,
				'th_masuk'=> $i,
				'th_lulus'=> $j,
				'no_hp'=> $k,
				'foto'=> $foto,
			);
			$dataa = array(
				'ig'=> $l,
				'tw'=> $m,
				'fb'=> $o,
				'yt'=> $p,
			);
			$this->db->where('id_alm', $a);
			$this->db->update('db_alumni', $data);
			$this->db->where('id_alm', $a);
			$this->db->update('db_sosmed', $dataa);
			if($this->db->affected_rows() > 0){
				echo "<script> alert('Data berhasil disimpan'); </script>";
			}echo "<script> window.location='".site_url('dasboard/profil')."'; </script>";

		}
	}

	//tambah berita
	public function tambahberita()
	{
		$config['upload_path']          = './asset/gambar_berita/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$config['max_size']             = 3072;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$id = $this->input->post('id', TRUE);
			$kt = $this->input->post('ktg', TRUE);
			$jd = $this->input->post('judul', TRUE);
			$tp = $this->input->post('topik', TRUE);

			$data = array(
				'id_alm'=> $id,
				'kategori'=> $kt,
				'judul'=> $jd,
				'isi_berita'=> $tp,
			);
			$this->db->insert('db_berita', $data);
			if($this->db->affected_rows() > 0){
				echo "<script> alert('Data berhasil disimpan'); </script>";
			}echo "<script> window.location='".site_url('dasboard/berita')."'; </script>";
		}
		else
		{
				$gambar = $this->upload->data();
				$gambar = $gambar['file_name'];
				$id = $this->input->post('id', TRUE);
				$kt = $this->input->post('ktg', TRUE);
				$jd = $this->input->post('judul', TRUE);
				$tp = $this->input->post('topik', TRUE);

				$data = array(
					'id_alm'=> $id,
					'kategori'=> $kt,
					'judul'=> $jd,
					'isi_berita'=> $tp,
					'gambar'=> $gambar,
				);
				$this->db->insert('db_berita', $data);
				if($this->db->affected_rows() > 0){
					echo "<script> alert('Data berhasil disimpan'); </script>";
				}echo "<script> window.location='".site_url('dasboard/berita')."'; </script>";

		}
	}

	//edit berita
	public function editberita()
	{
		$config['upload_path']          = './asset/gambar_berita/';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$config['max_size']             = 3072;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$id = $this->input->post('id', TRUE);
			$kt = $this->input->post('ktg', TRUE);
			$jd = $this->input->post('judul', TRUE);
			$tp = $this->input->post('topik', TRUE);

			$data = array(
				'id_berita'=> $id,
				'kategori'=> $kt,
				'judul'=> $jd,
				'isi_berita'=> $tp,
			);
			$this->db->where('id_berita', $id);
			$this->db->update('db_berita', $data);
			if($this->db->affected_rows() > 0){
				echo "<script> alert('Data berhasil disimpan'); </script>";
			}echo "<script> window.location='".site_url('dasboard/historybrt')."'; </script>";
		}
		else
		{
				$gambar = $this->upload->data();
				$gambar = $gambar['file_name'];
				$id = $this->input->post('id', TRUE);
				$kt = $this->input->post('ktg', TRUE);
				$jd = $this->input->post('judul', TRUE);
				$tp = $this->input->post('topik', TRUE);

				$data = array(
					'id_berita'=> $id,
					'kategori'=> $kt,
					'judul'=> $jd,
					'isi_berita'=> $tp,
					'gambar'=> $gambar,
				);
				$this->db->where('id_berita', $id);
				$this->db->update('db_berita', $data);
				if($this->db->affected_rows() > 0){
					echo "<script> alert('Data berhasil disimpan'); </script>";
				}echo "<script> window.location='".site_url('dasboard/historybrt')."'; </script>";

		}
	}

	//history berita
	public function historybrt()
	{
		$this->load->model('user_m');
		$data['row'] = $this->user_m->historybrt();
		$this->template->load('hal2/template','hal2/historybrt',$data);
	}

	//hapus berita history
	public function delhystorybrt()
	{
		$id = $this->input->post('id_berita');
		$this->user_m->delbrt($id);

		if($this->db->affected_rows() > 0){
			echo "<script>alert('Data berhasil di Hapus')</script>";
		}echo "<script>window.location='".site_url('dasboard/historybrt')."';</script>";
	}

	//ubah password
	public function editpsw()
	{
		check_not_login();
		$this->form_validation->set_rules('pswlama','Pasword Lama','required');
		$this->form_validation->set_rules('pswbaru','Password Baru','required|trim|min_length[5]');
		$this->form_validation->set_rules('konfpsw','Konfirmas','required|trim|min_length[5]|matches[pswbaru]');

		$this->form_validation->set_message('required','%s Harap Di Isi');
		$this->form_validation->set_message('matches','%s Tidak Sesuai ');
		$this->form_validation->set_message('min_length','%s masukan minimal 5 karakter');
		if ($this->form_validation->run()== FALSE) {
			$this->template->load('hal2/template','hal2/ubahpassword');
		}else{
			$cek= $this->input->post('pswlama');
			$hash= $this->fungsi->user_login()->psw;
			if($cek== $hash){
				$post = $this->input->post(null, TRUE);
				$this->user_m->editpsw($post);
				echo "<script> alert('Password berhasil di ubah'); window.location='".site_url('dasboard')."'; </script>";
			}else{
				echo "<script> alert('Masukan Password lama dengan benar'); </script>";
			}echo "<script> window.location='".site_url('dasboard/editpsw')."'; </script>";
		}
	}

	 //edit kegiatan
	 public function editkegiatan(){
			$a = $this->input->post('id', TRUE);
			$j = $this->input->post('st_kgtt', TRUE);
			$b = $this->input->post('nmuniv', TRUE);
			$c = $this->input->post('pgstudi', TRUE);
			$d = $this->input->post('thmasuku', TRUE);
			$e = $this->input->post('jjstudi', TRUE);
			$f = $this->input->post('status', TRUE);
			$ji = $this->input->post('st_beasiswa', TRUE);
			$k = $this->input->post('ket_beasiswa', TRUE);
			$g = $this->input->post('nmperusahaan', TRUE);
			$h = $this->input->post('jabatan', TRUE);
			$i = $this->input->post('thmasukp', TRUE);

			$data = array(
				'id_alm'=> $a,
				'st_kgt'=> $j,
				'nama_univ'=> $b,
				'pg_studi'=> $c,
				'th_masuk_u'=> $d,
				'jenjang'=> $e,
				'status'=> $f,
				'st_beasiswa'=> $ji,
				'ket_beasiswa'=> $k,
				'nm_perusahaan'=> $g,
				'jabatan'=> $h,
				'th_masuk_p'=> $i,
			);
			$this->db->where('id_alm', $a);
			$this->db->update('db_kegiatan', $data);
			if($this->db->affected_rows() > 0){
				echo "<script> alert('Data berhasil disimpan'); window.location='".site_url('dasboard/kegiatan')."'; </script>";
			}else{
				echo "Gagala Update";
			}
    }

	 //edit data Orang Tua
	 public function edit_dtortu(){
			$id = $this->input->post('id', TRUE);
			$a = $this->input->post('nmayah', TRUE);
			$b = $this->input->post('pdayah', TRUE);
			$c = $this->input->post('pkayah', TRUE);
			$d = $this->input->post('atayah', TRUE);
			$e = $this->input->post('nmibu', TRUE);
			$f = $this->input->post('pdibu', TRUE);
			$g = $this->input->post('pkibu', TRUE);
			$h = $this->input->post('atibu', TRUE);

			$data = array(
				'id_ortu'=> $id,
				'nm_ayah'=> $a,
				'pd_ayah'=> $b,
				'pk_ayah'=> $c,
				'alamat_ayah'=> $d,
				'nm_ibu'=> $e,
				'pd_ibu'=> $f,
				'pk_ibu'=> $g,
				'alamat_ibu'=> $h,
			);
			$this->db->where('id_alm', $id);
			$this->db->update('data_orangtua', $data);
			if($this->db->affected_rows() > 0){
				echo "<script> alert('Data berhasil disimpan'); window.location='".site_url('dasboard/orangtua')."'; </script>";
			}else{
				echo "Gagala Update";
			}
    }
	 //tambah kuesioner 1
	 public function tbjawab(){
			$a = $this->input->post('id_alm', TRUE);
			$b = $this->input->post('nama', TRUE);
			$c = $this->input->post('jurusan', TRUE);
			$d = $this->input->post('th_lulus', TRUE);
			$e = $this->input->post('r1', TRUE);
			$f = $this->input->post('r2', TRUE);
			$g = $this->input->post('r3', TRUE);
			$h = $this->input->post('r4', TRUE);
			$i = $this->input->post('r5', TRUE);
			$j = $this->input->post('r6', TRUE);
			$k = $this->input->post('r7', TRUE);
			$l = $this->input->post('r8', TRUE);
			$m = $this->input->post('r9', TRUE);
			$n = $this->input->post('r10', TRUE);
			$o = $this->input->post('r11', TRUE);
			$p = $this->input->post('r12', TRUE);
			$q = $this->input->post('kds', TRUE);
			$paramss['no_'] = $this->input->post('nokq', TRUE);

			$data = array(
				'id_alm'=> $a,
				'nama'=> $b,
				'jurusan'=> $c,
				'th_lulus'=> $d,
				'q1'=> $e,
				'q2'=> $f,
				'q3'=> $g,
				'q4'=> $h,
				'q5'=> $i,
				'q6'=> $j,
				'q7'=> $k,
				'q8'=> $l,
				'q9'=> $m,
				'q10'=> $n,
				'q11'=> $o,
				'q12'=> $p,
				'kds'=> $q,
			);
			$this->db->insert('jawaban', $data);
			$this->db->where('id_alm', $a);
			$this->db->update('ketkq', $paramss);
			if($this->db->affected_rows() > 0){
				echo "<script> alert('Terimakasih Sudah Mengisikan Kuesioner :)'); window.location='".site_url('dasboard/kuesioner')."'; </script>";
			}else{
				echo "Gagala simpan";
			}
    }

//ini kuesioner ke 2

	 public function tbjawab2(){
			$params['id_jwb2'] = $this->input->post('id_jw2', TRUE);
			$paramss['no'] = $this->input->post('nokq', TRUE);
			$a = $this->input->post('id_alm', TRUE);
			$b = $this->input->post('nama', TRUE);
			$c = $this->input->post('jurusan', TRUE);
			$d = $this->input->post('th_lulus', TRUE);
			$e = $this->input->post('r1', TRUE);
			$f = $this->input->post('r2', TRUE);
			$g = $this->input->post('r3', TRUE);
			$h = $this->input->post('r4', TRUE);

			$data = array(
				'id_alm'=> $a,
				'nama'=> $b,
				'jurusan'=> $c,
				'th_lulus'=> $d,
				'f1'=> $e,
				'f2'=> $f,
				'f3'=> $g,
				'f4'=> $h,
			);
			$this->db->insert('jawaban3', $params);
			$this->db->insert('jawaban4', $params);
			$this->db->where('id_alm', $a);
			$this->db->update('ketkq', $paramss);
			$this->db->where('id_alm', $a);
			$this->db->update('jawaban2', $data);
			if($this->db->affected_rows() > 0){
				echo "<script>window.location='".site_url('dasboard/kuesioner3')."';</script>";
			}else{
				echo "Gagala simpan";
			}
    }
// edit kuesioner 2
	public function tbjawabedit(){
		$paramss['no'] = $this->input->post('nokq', TRUE);
		$a = $this->input->post('id_alm', TRUE);
		$b = $this->input->post('nama', TRUE);
		$c = $this->input->post('jurusan', TRUE);
		$d = $this->input->post('th_lulus', TRUE);
		$e = $this->input->post('r1', TRUE);
		$f = $this->input->post('r2', TRUE);
		$g = $this->input->post('r3', TRUE);
		$h = $this->input->post('r4', TRUE);

		$data = array(
			'id_alm'=> $a,
			'nama'=> $b,
			'jurusan'=> $c,
			'th_lulus'=> $d,
			'f1'=> $e,
			'f2'=> $f,
			'f3'=> $g,
			'f4'=> $h,
		);
		$this->db->where('id_alm', $a);
		$this->db->update('ketkq', $paramss);
		$this->db->where('id_alm', $a);
		$this->db->update('jawaban2', $data);
		if($this->db->affected_rows() > 0){
			echo "<script>window.location='".site_url('dasboard/kuesioner3')."';</script>";
		}else{
			echo "Gagala simpan";
		}
}

//ini kuesioner ke 3

	public function jawab_ka(){
		$a = $this->input->post('id_jwb2', TRUE);
		$b = $this->input->post('r1', TRUE);
		$c = $this->input->post('r2', TRUE);
		$d = $this->input->post('r3', TRUE);
		$e = $this->input->post('r4', TRUE);
		$f = $this->input->post('r5', TRUE);
		$g = $this->input->post('r6', TRUE);
		$h = $this->input->post('r7', TRUE);
		$i = $this->input->post('r8', TRUE);
		$j = $this->input->post('r9', TRUE);
		$k = $this->input->post('r10', TRUE);
		
		$data = array(
			'id_jwb2'=> $a,
			's1'=> $b,
			's2'=> $c,
			's3'=> $d,
			's4'=> $e,
			's5'=> $f,
			's6'=> $g,
			's7'=> $h,
			's8'=> $i,
			's9'=> $j,
			's10'=> $k,
		);
		$this->db->where('id_jwb2', $a);
		$this->db->update('jawaban3', $data);
		if($this->db->affected_rows() > 0){
			echo "<script>window.location='".site_url('dasboard/kuesioner4')."';</script>";	
		}else{
			echo "Gagala simpan";
		}
}
	public function jawab_kb(){
		$a = $this->input->post('id_jwb2', TRUE);
		$b = $this->input->post('r1', TRUE);
		$c = $this->input->post('r2', TRUE);
		$d = $this->input->post('r3', TRUE);
		$e = $this->input->post('r4', TRUE);
		$f = implode (', ', $this->input->post('r5', TRUE));
		$g = implode (', ', $this->input->post('r6', TRUE));
		
		$data = array(
			'id_jwb2'=> $a,
			'b1'=> $b,
			'b2'=> $c,
			'b3'=> $d,
			'b4'=> $e,
			'b5'=> $f,
			'b6'=> $g,

		);
		$this->db->where('id_jwb2', $a);
		$this->db->update('jawaban3', $data);
		if($this->db->affected_rows() > 0){
			echo "<script>window.location='".site_url('dasboard/kuesioner4')."';</script>";	
		}else{
			echo "Gagala simpan";
		}


	}

	//ini kuesioner ke 4

	public function jawab_kk(){
		$paramss['no'] = $this->input->post('nokq', TRUE);
		$id_alm = $this->input->post('id_alm', TRUE);
		$a = $this->input->post('id_jwb2', TRUE);
		$b = $this->input->post('r1', TRUE);
		$c = $this->input->post('r2', TRUE);
		$d = $this->input->post('r3', TRUE);
		$e = $this->input->post('r4', TRUE);
		$f = $this->input->post('r5', TRUE);
		$g = $this->input->post('r6', TRUE);
		$h = $this->input->post('r7', TRUE);
		$i = $this->input->post('r8', TRUE);
		$j = $this->input->post('r9', TRUE);
		$k = $this->input->post('r10', TRUE);
		$l = $this->input->post('r11', TRUE);
		$m = $this->input->post('r12', TRUE);
		$n = $this->input->post('r13', TRUE);
		$o = $this->input->post('r14', TRUE);
		
		$data = array(
			'id_jwb2'=> $a,
			'k1'=> $b,
			'k2'=> $c,
			'k3'=> $d,
			'k4'=> $e,
			'k5'=> $f,
			'k6'=> $g,
			'k7'=> $h,
			'k8'=> $i,
			'k9'=> $j,
			'k10'=> $k,
			'k11'=> $l,
			'k12'=> $m,
			'k13'=> $n,
			'k14'=> $o,

		);
		$this->db->where('id_alm', $id_alm);
		$this->db->update('ketkq', $paramss);
		$this->db->where('id_jwb2', $a);
		$this->db->update('jawaban4', $data);
		if($this->db->affected_rows() > 0){
			echo "<script> alert('Terimakasih Sudah Mengisikan Kuesioner :)'); window.location='".site_url('dasboard/kuesioner2')."'; </script>";	
		}else{
			echo "Gagala simpan";
		}
}
	public function jawab_km(){
		$paramss['no'] = $this->input->post('nokq', TRUE);
		$id_alm = $this->input->post('id_alm', TRUE);
		$a = $this->input->post('id_jwb2', TRUE);
		$b = $this->input->post('r1', TRUE);
		$c = $this->input->post('r2', TRUE);
		$d = $this->input->post('r3', TRUE);
		$e = $this->input->post('r4', TRUE);
		$f = $this->input->post('r5', TRUE);
		$g = $this->input->post('r6', TRUE);
		$h = $this->input->post('r7', TRUE);
		
		$data = array(
			'id_jwb2'=> $a,
			'm1'=> $b,
			'm2'=> $c,
			'm3'=> $d,
			'm4'=> $e,
			'm5'=> $f,
			'm6'=> $g,
			'm7'=> $h,

		);
		$this->db->where('id_alm', $id_alm);
		$this->db->update('ketkq', $paramss);
		$this->db->where('id_jwb2', $a);
		$this->db->update('jawaban4', $data);
		if($this->db->affected_rows() > 0){
			echo "<script> alert('Terimakasih Sudah Mengisikan Kuesioner :)'); window.location='".site_url('dasboard/kuesioner2')."'; </script>";	
		}else{
			echo "Gagala simpan";
		}
}


}
?>