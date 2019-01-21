<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

	public function index()
	{
		$this->load->view('v_chart');
	}

	public function getData()
	{
		$this->load->model('Chart_model');
		$data = $this->Chart_model->getMahasiswa();
		echo json_encode($data);
		// var_dump($cek);
		// exit();

	}
}
