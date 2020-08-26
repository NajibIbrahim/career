<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        //load model admin
		$this->load->model('admin');
		// $this->load->model('Akun_Model');
		// $this->load->model('Level_Model');
		$this->load->library('upload');

        //cek session dan level user
		if($this->admin->is_role() != "admin"){
			redirect("login");
		}
	}

	public function index()
	{
		$data = $this->Materi_Model->Get('materi');
		$data = array('data' => $data);

		$this->load->view('admin/materi_list', $data);
	}

	public function tambah()
	{
		return $this->load->view('admin/materi_tambah');
	}

	// public function aksi_tambah(){
	// 	$config['upload_path'] = './assets/login/materi';
	// 	$config['allowed_types'] = 'mp4|docx|pptx';
	// 	$config['encrypt_name'] = TRUE;
	//
	// 	$this->upload->initialize($config);
	// 	if($this->upload->do_upload("file")){
	// 		$data = array('upload_data' => $this->data());
	//
	// 		$materi = $this->input->post('nama_materi');
	// 		$akses = $this->input->post('akses');
	//
	// 		$file = $data['upload_data']['file_name'];
	//
	// 		$result = $this->Materi_Model->simpan_materi($materi, $akses, $file);
	// 		echo json_decode($result);
	// 	}else{
	// 		$error = array('error' => $this->upload->display_errors());
	//  		$this->session->set_flashdata('error',$error['error']);
	// 	}
	// }
  // untuk memasukan data ke database
	private function upload()
	{
      // get file
		$config['upload_path'] = './assets/login/materi';
		$config['allowed_types'] = 'jpg|png|jpeg|pptx|docx|pdf|mp4';
    $config['max_size'] = '90000048';  // max
    $config['file_name'] = $_FILES['file']['name'];

    $this->load->library('upload', $config);
		$this->upload->initialize($config);

		if($this->upload->do_upload("file")){
			return $this->upload->data("file_name");
		}
		print_r($this->upload->display_errors());
   //    if (!$this->upload->do_upload($nama)) {
		// 		var_dump($this->upload->do_upload($nama));
		// 		die();
   //     $file = $this->upload->data();
   //     $data = array(
   //      'nama_materi' => $nama_materi,
   //      'akses'       => $akses,
   //      'nama_file'   => $file['file_name'],
   //    );
   //     $this->Materi_Model->insert($data);
   //    			// redirect('admin/materi');
	 //
   //  }else {
   //   // die("Gagal Upload");
   // }
}

public function aksi_tambah(){
	$materi = $this->input->post('nama_materi');
	$akses = $this->input->post('akses');
	$file = $this->upload();
	$data = array(
		'nama_materi' => $materi,
		'akses' => $akses,
		'nama_file' => $file
	);
	$this->Materi_Model->insert($data);
}

public function edit($id)
{
 $materi=($this->Materi_Model->ambil_data_id($id));
 $data = array(
  'id_materi'   => set_value('id_materi',$materi->id_materi),
  'nama_materi' => set_value('nama_materi',$materi->nama_materi),
  'akses'       => set_value('akses',$materi->akses),
  'nama_file'   => set_value('nama_file',$materi->nama_file),
  'action' 	  => site_url('admin/materi/aksi_edit')
);
 $this->load->view('admin/materi_edit', $data);
}

public function aksi_edit()
{
 $data = array(
  'nama'     => $this->input->post('nama'),
  'ket'      => $this->input->post('ket'),
  'username' => $this->input->post('username'),
  'level'    => $this->input->post('level')
);
 $id_akun = $this->input->post('id_akun');
 $this->Akun_Model->edit_data($id_akun,$data);
 redirect(site_url('admin/akun'));
}

public function hapus($id){
  $gambar = $this->Materi_Model->gambar($id);
  unlink('assets/login/materi/'.$gambar->gambar);

  $this->Materi_Model->hapus($id);
  redirect('admin/akun');
}




}
