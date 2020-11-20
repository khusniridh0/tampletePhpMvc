<?php 

class Controller {
	
	public function view($view, $data = []){
		print_r($view);
		require_once '../app/views/home/index.php';
	}
}