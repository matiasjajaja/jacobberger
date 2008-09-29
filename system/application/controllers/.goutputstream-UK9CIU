<?php

class Adm extends Controller {

	function Adm()
	{
		parent::Controller();
		
		$this->load->library('auth');
		$this->load->model('Jb_config');
		$this->load->helper('url');
	
	}
	
	function index(){
		$page = array(
				//Page static data
				'title' => 'Content Management',
				'name' => 'Dashboard',
				//Page dynamic data
				'username' => $this->session->userdata('call_user'),
				'userid' => $this->session->userdata('user_id'),
				'loggouturi' => $this->config->item('base_url').'adm/loggout',
		);
		
		// Render 	
		$this->load->view('admin/header_view', $page);
		if(isset($page['userid']) && $page['userid'] <> ""){
			$this->load->view('admin/admin_view', $page);
		}else{
			$data->loginuri = $this->config->item('base_url').'adm/login';
			$this->load->view('admin/login_view', $data);
		}
		$this->load->view('admin/footer_view');
	
	}

	function login(){
		$page = array(
				//Page static data
				'title' => 'Content Management',
				'name' => 'Login',
		);
		
		$this->load->view('admin/header_view', $page);
		
		if ($_POST) {
			// Validate data
            $this->load->library('validation');
            $rules['username']	= "required|trim";
            $rules['password']	= "required|trim";
            $this->validation->set_rules($rules);    
            if ($this->validation->run() == FALSE) {
                $data->errors = $this->validation->error_string;
				$data->loginuri = $this->config->item('base_url').'adm/login';
                $this->load->view('admin/login_view', $data);
            } else {
			// Validate user
                if (!$this->auth->try_login(array('user_login' => $this->validation->username, 'user_pass' => md5($this->validation->password)))) {
            // Invalid user
                    $data->errors = 'Login error, check username - password and try again.';
					$data->loginuri = $this->config->item('base_url').'adm/login';
                    $this->load->view('admin/login_view', $data);
                } else {
			// Redirect to the admin dashboard
                    header('Location: '.$this->config->item('base_url').'adm');
                }
            }
        } else {
            $this->load->view('admin/login_view');    
        }
        $this->load->view('admin/footer_view');
    }

    function loggout()
    {
        $this->auth->logout();   
    }

}

/* End of file admin.php */
/* Location: ./system/application/controllers/adm.php */