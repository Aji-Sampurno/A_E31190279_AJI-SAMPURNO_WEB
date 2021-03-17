<?php
class soal1 extends CI_Controller{
	public function index(){
		$this -> load -> model ('soal1_model');

		$model = $this -> soal1_model;

		$a = $model -> txt;

		$data['teks'] = $a;

		$this -> load -> view ('soal1_view', $data);
	}
}
?>
