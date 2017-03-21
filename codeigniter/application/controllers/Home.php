<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
			$this->load->model('biodata');
		//Do your magic here
		$data['biodata_array']= $this->biodata->getBiodataArray();

		$data['biodata_object']= $this->biodata->getBiodataObject();
		$this->load->view('home', $data);



	}
	public function FunctionName($value = '')
	{

	}
}


/* End of file home.php */
/* Location: ./application/controllers/home.php */