
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function getBiodataArray()
	{
		$query = $this->db->query("select * from biodata");
		return $query->result_array();

	}
	public function getBiodataObject()
	{
		$query = $this->db->query("select * from biodata");
		return $query->result();

	}
}

/* End of file Biodata.php */
/* Location: ./application/models/Biodata.php */

