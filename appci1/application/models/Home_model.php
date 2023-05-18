<?php

namespace models;

class Home_model extends \CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function getItems()
	{
		$res = $this->db->get('items');
		return $res->result_array();
	}
}
