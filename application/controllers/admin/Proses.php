<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Proses extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata('status') != "login") {
		// 	redirect(base_url());
		// }
		// $this->load->library('form_validation');
		$this->load->model('M_proses', 'model');
		$this->load->helper('url');
	}

	function index()
	{
		//untuk data[cek] nanti diambil dari session
		$data['cek']	= $this->model->getData('users', array('level' => 1))->row();

		$data['queue'] 	= $this->model->listJoin('q.status = 1')->result();
		$data['secq'] 	= $this->model->listJoinSecond('q.status = 1')->result();

		// var_dump($data['secq'] );
		$this->load->view('pages/antrian/index', $data);
	}

}
