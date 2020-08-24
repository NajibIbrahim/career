<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubahpassword extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
        //load model admin
		$this->load->model('admin');
        //cek session dan level user
		if($this->admin->is_role() != "siswa"){
			redirect("login");
		}
	}

	public function index()
	{
		$data = $this->Akun_Model->Get('tbl_akun');
		$data = array('data' => $data);

		$this->load->view('siswa/ubah-password', $data);
	}

	public function aksi_ubah()
	{

	}
}
