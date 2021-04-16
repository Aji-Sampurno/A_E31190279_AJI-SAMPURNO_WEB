<?php
	defined('BASEPATH')OR exit('No direct script access allowed');
	//untuk membuat kelas
	class Mahasiswa extends CI_Controller{
		//untuk melakukan load mahasiswa model setiap kali menjalankan class
		function __construct(){
			parent::__construct();
			$this -> load -> model('Mahasiswa_model');//load Mahasiswa_model dari folder model
		}

		//membuat function index 
		public function index(){
			$data['user'] = $this->Mahasiswa_model->getAll()->result();//untuk memasukkan nilai kedalam array
			$this->template->views('crud/home_mahasiswa',$data);// untuk melakukan pemanggilan kelas
		}
		
		//membuat function tambah
		public function tambah(){
			$this->template->views('crud/tambah_mahasiswa');//untuk memanggil kelas tambah_mahasiswa
		}

		//membuat function input
		public function input(){
			$username = $this->input->post('username');//untuk melakukan post dari inputan username
			$password = $this->input->post('pass');//untuk melakukan post dari inputan password
			$nama = $this->input->post('nama');//untuk melakukan post dari inputan nama
			$grup = $this->input->post('grup');//untuk melakukan post untuk inputan grup

			//membuat array untuk menyimpan data hasil inputan
			$data = array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'grup' => $grup,
				);
			//untuk memanggil function input data yang berada di class Mahasiswa_model
			$this->Mahasiswa_model->input_data($data,'tm_user');
			redirect('Mahasiswa/index');//digunakan untuk mengarahkan ke index yang ada di class mahasiswa
		}
	}
	
?>
