<?php
	
	class Home extends CI_Controller
	{
		public function index()
		{
			$date['title'] = 'Page1';
			$date['text'] ='This text was send from Home controller';
			$date['countries'] = array('Argentina', 'Belgium', 'Canada', 'Great Britain');
			$this->load->view('page1', $date);
		}
	}
