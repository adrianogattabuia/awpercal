<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	

	public function index()	{
		
		$this->load->model('percal');

		$this->load->view('templates/head');
		$this->load->view('default_body_view');
		$this->load->view('templates/end_scripts');
		
		
		
		

		
	}

	public function calcA() {
				
		$A1 = $this->input->post('valueA1');
		$A2 = $this->input->post('valueA2');

				 
		$this->load->model('percal');
		$resultA = $this->percal->model_calcA($A1, $A2);

		echo $resultA;

		
		
	}

	public function calcB() {
		
		$B1 = $this->input->post('valueB1');
		$B2 = $this->input->post('valueB2');
		
		$this->load->model('percal');
		$resultB = $this->percal->model_calcB($B1, $B2);

		
		echo $resultB;

	}

	public function save() {
		
		// ...soon		

	}


	
}
