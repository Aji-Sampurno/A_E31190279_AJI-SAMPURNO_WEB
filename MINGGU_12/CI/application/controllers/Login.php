<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
	class Login extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Mahasiswa_model');
		}

		public function index(){
			$this->load->view('crud/login');
		}

		public function cek_log(){
			$username = $this->input->post('txt_user');
			$password = $this->input->post('txt_pass');
			$cek = $this->Mahasiswa_model->Login($username,$password,'tm_user')->result();
			if($cek != FALSE){
				foreach ($cek as $row){
					$user = $row->usename;
					$grup = $row->grup;
				}
				$this->session->set_userdata('session_user',$user);
				$this->session->set_userdata('session_grup',$grup);
				redirect('Mahasiswa');
			}else{
				$this->load->view('crud/login');
			}

			function logout()
			{
				// hancurkan semua sesi
				$this->session->sess_destroy();
				redirect(base_url('crud/login'));
			}
		}
	}
