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

		public function edit($id){
			$where = array('id' => $id);
			$data['user'] = $this -> Mahasiswa_model -> edit_data($where,'tm_user') -> result();
			$this -> template -> views('crud/edit_mahasiswa',$data);
		}

		public function update(){
			$id = $this->input->post('id');
			$username = $this->input->post('username');
			$password = $this->input->post('pass');
			$nama = $this->input->post('nama');
			$grup = $this->input->post('grup');

			$data = array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'grup' => $grup,
			);

			$where = array(
				'id' => $id
			);

			$this->Mahasiswa_model->update_data($where,$data,'tm_user');
			redirect('Mahasiswa');
		}

		public  function hapus($id){
			$where = array('id' => $id);
			$this->Mahasiswa_model->hapus_data($where,'tm_user');
			redirect('Mahasiswa/index');
		}

		public function Api(){
			$data = $this->Mahasiswa_model->getAll();
			echo json_encode($data->result_array());
		}

		public function ApiInsert(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$grup = $this->input->post('grup');

			$data = array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'grup' => $grup
			);
			$this->Mahasiswa_model->input_data($data,'tm_user');
			echo json_encode($array);
		}

		public function ApiDelete(){
			if ($this->input->post('username')){
				$where = array('username'=>$this->input->post('username'));
				if ($this->Mahasiswa_model->hapus_data($where,'tm_user')){
					$array = array('success' => true);
				}else{
					$array = array('error' => true);
				}
				echo json_encode($array);
			}
		}

	}
	
?>
