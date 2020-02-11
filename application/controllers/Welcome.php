<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
        $this->load->model(array());
        $this->load->library(array('form_validation', 'session', 'template'));
        $this->load->helper('custom_url');
	}

	public function index()
	{
		$this->template->load('v_layout', 'v_index');
	}

	public function maps_action()
	{
		$data = "https://www.google.com/maps/place/Kemuning+Kost/@-6.8490139,108.816275,17z/data=!4m5!3m4!1s0x2e6fa82f1409fdf7:0xae6951844a557504!8m2!3d-6.8486517!4d108.8154167";
		echo json_encode($data);
	}

	public function ask_action()
	{
		if (isset($_POST) && !empty($_POST)) {
			$text=$this->input->post('txdata');
	        $data = "https://wa.me/6285786782660?text=".$text;
	        echo json_encode($data);
		}
	}
}
