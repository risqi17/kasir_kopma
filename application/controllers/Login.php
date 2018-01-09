<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_kasir');
 		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('cookie');
		
	}
 
	function index(){
		$this->load->view('login');
	}
 
	function aksi_login(){
		$ksr_id = $this->input->post('ksr_nama');
		$ksr_password = $this->input->post('ksr_password');
		$where = array(
			'ksr_id' => $ksr_id,
			'ksr_password' => md5($ksr_password)
			);
		$cek = $this->model_kasir->cek_login("tb_kasir",$where)->num_rows();
		if($cek > 0){
 			$c = $this->model_kasir->cek_login("tb_kasir",$where)->row();
			$data_session = array(
				'id' => $ksr_id,
				'jabatan' => $c->KSR_JABATAN,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('url');
 
		}else{
			$this->session->set_flashdata("pesan", " <p style='color: #f44336;'><i class='fa fa-warning'></i>&nbspPeriksa kembali email dan passwordmu</p>");
			redirect('login'); 
			
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}