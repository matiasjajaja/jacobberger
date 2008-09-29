<?php

class Home extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$page = array(
				//Page static data
				'title' => 'Jacob Berger',
				'name' => 'Home',
				//Page dynamic data
				'films' => $this->db->query('SELECT * FROM jb_categories WHERE ctype = "films" ORDER BY cname ASC'),
				'commercials' => $this->db->query('SELECT * FROM jb_categories WHERE ctype = "commercials" ORDER BY cname ASC'),
		  );
		// --- Load View
		$this->load->view('home_view', $page);
	}
	
}

/* End of file home.php */
/* Location: ./system/application/controllers/home.php */