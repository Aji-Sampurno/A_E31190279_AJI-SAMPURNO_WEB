<?php
class Kode extends CI_Controller{
	public function hello ($var){
		if (isset($var)){
			switch(strtolower($var)){
			case 'php':
				$this -> laod -> view('phpview');
				break;
			case 'python':
				$this -> laod -> view('pythonview');
				break;
			case 'cpp':
				$this -> laod -> view('cppview');
				break;
			case 'java':
				$this -> laod -> view('javaview');
				break;
			default:
				echo 'Input URI salah';
			}
		}else{
			echo 'Input URI salah';
		}
	}
}
