<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengisi extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
        //load model admin
		$this->load->model('admin');
        //cek session dan level user
		if($this->admin->is_role() != "admin"){
			redirect("login");
		}
	}

	public function index()
	{
		$data = $this->Akun_Model->Get('pengisi');
		$data = array('data' => $data);

		$this->load->view('admin/pengisi_list', $data);
	}

	public function lihat()
	{

		// $akun=($this->Pengisi_Model->ambil_data_id($id));

		// $this->load->view('admin/pengisi_lihat', $data);
		$this->load->view('admin/pengisi_lihat');
	}
}
