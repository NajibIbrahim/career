<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi_Model extends CI_Model {

  public $table = 'materi';
  public $id = 'id_materi';

  public function Get($table)
  {
    $res = $this->db->get($table);
    return $res->result_array();
  }

  function ambil_data_id($id)
  {
    $this->db->where($this->id,$id);
        // $this->db->where('id_akun',$id);
    return $this->db->get($this->table)->row();
  }

  public function insert($data)
  {
    $this->db->insert('materi', $data);
    return TRUE;
  }

  // public function delete($where)
  // {
  //   $this->db->where($where);
  //   $this->db->delete('materi');
  //   return TRUE;
  // }

  function edit_data($id, $data)
  {
    $this->db->where($this->id, $id);
    $this->db->update($this->table,$data);
  }

  public function delete($id)
  {
    $this->_deleteImage($id);
    return $this->db->delete($this->_table, array("id_materi" => $id));
  }

  private function deleteImage($id)
  {
    $materi = $this->ambil_data_id($id);    
    $filename = explode(".", $materi->file)[0];
    return array_map('unlink', glob(FCPATH."./assets/login/materi/$filename.*"));
  }


}
?>