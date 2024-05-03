<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Siswa');
	}

	public function index()
	{
		$recordSsw = $this->M_Siswa->getDataSiswa();
		$DATA = array ('data_siswa' => $recordSsw);
		$this->load->view('home', $DATA);
	}

	public function formInput(){
		$this->load->view('form_input');
	}

	public function formEdit($id) {
		$recordSsw = $this->M_Siswa->getDataSiswaDetail($id);
		echo "<pre>";
		print_r($recordSsw);
		echo "</pre>";
		$DATA = array('data_siswa' => $recordSsw);
		$this->load->view('form_edit', $DATA);

	}

	public function AksiInsert(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$tgl = $this->input->post('tgl');
		$tempat = $this->input->post('tempat');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agama = $this->input->post('agama');

		$DataInsert = array (
			'nis' => $nis,
			'nama' => $nama,
			'kelas' => $kelas,
			'tgl' => $tgl,
			'tempat' => $tempat,
			'alamat' => $alamat,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
		);

		$this->M_Siswa->InsertDataSsw($DataInsert);
		redirect (base_url('Welcome'));
	}

	public function AksiEdit(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$tgl = $this->input->post('tgl');
		$tempat = $this->input->post('tempat');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agama = $this->input->post('$agama');
	}
}
