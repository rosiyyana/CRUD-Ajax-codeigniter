<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pegawai_model extends CI_Model {
  public function view(){
    return $this->db->get('pegawai')->result();
  }
  public function validation($mode){
    $this->load->library('form_validation'); 
    if($mode == "save")
    $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
    $this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('input_telp', 'telp', 'required|numeric|max_length[15]');
    $this->form_validation->set_rules('input_alamat', 'Alamat', 'required');
    if($this->form_validation->run())
      return true; 
    else 
      return false; 
  }
  public function save(){
    $data = array(
      "nama" => $this->input->post('input_nama'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "telp" => $this->input->post('input_telp'),
      "alamat" => $this->input->post('input_alamat')
    );
    $this->db->insert('pegawai', $data); 
  }
  public function edit($id){
    $data = array(
      "nama" => $this->input->post('input_nama'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "telp" => $this->input->post('input_telp'),
      "alamat" => $this->input->post('input_alamat')
    );
    $this->db->where('id', $id);
    $this->db->update('pegawai', $data); 
  }
  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('pegawai'); 
  }
}