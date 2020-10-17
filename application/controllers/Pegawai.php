<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pegawai extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('Pegawai_model'); 
  }
  public function index(){
    $data['model'] = $this->Pegawai_model->view();
    $this->load->view('pegawai/index', $data);
  }
  public function simpan(){
    if($this->Pegawai_model->validation("save")){ 
      $this->Pegawai_model->save();
      $html = $this->load->view('pegawai/view', array('model'=>$this->Pegawai_model->view()), true);
      $callback = array(
        'status'=>'sukses',
        'pesan'=>'Data berhasil disimpan',
        'html'=>$html
      );
    }else{
      $callback = array(
        'status'=>'gagal',
        'pesan'=>validation_errors()
      );
    }
    echo json_encode($callback);
  }
  public function ubah($id){
    if($this->Pegawai_model->validation("update")){ 
      $this->Pegawai_model->edit($id); 
      $html = $this->load->view('pegawai/view', array('model'=>$this->Pegawai_model->view()), true);
      $callback = array(
        'status'=>'sukses',
        'pesan'=>'Data berhasil diubah',
        'html'=>$html
      );
    }else{
      $callback = array(
        'status'=>'gagal',
        'pesan'=>validation_errors()
      );
    }
    echo json_encode($callback);
  }
  public function hapus($id){
    $this->Pegawai_model->delete($id); 
    $html = $this->load->view('pegawai/view', array('model'=>$this->Pegawai_model->view()), true);
    $callback = array(
      'status'=>'sukses',
      'pesan'=>'Data berhasil dihapus',
      'html'=>$html
    );
    echo json_encode($callback);
  }
}