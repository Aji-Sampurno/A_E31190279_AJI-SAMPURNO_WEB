<?php
class soal2 extends CI_Controller{
	public function index(){
		$this -> load -> model ('soal2_model');

		$model = $this -> soal2_model;

		$a = $model -> dataku;

		$data['dataku'] = $a;

		$this -> load -> view ('soal2_view', $data);
	}
}
?>
