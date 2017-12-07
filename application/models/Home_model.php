<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
		
	public function __construct()
	parent::__construct();
	{
		$this->load->database();
	}

	public function get_dashboard_kontingen()
	{
		$this->db->select("*");
		$this->db->from("kontingen");
		$query = $this->db->get();
		return $query->result();
}
