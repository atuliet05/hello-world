<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
        parent::__construct();
		//echo '<pre>';
		 //print_r($this->session->userdata);
		if(isset($this->session->userdata['username'])){
			 redirect('dashboard', 'refresh');
		}
    }
    
    public function index($msg = NULL){
        // Load our view to be displayed
        // to the user
        $data['msg'] = $msg;
		
		// echo '<pre>';
		// print_r($this->session->userdata);
			// echo $uname = $this->session->userdata['username'];
			
			//to destroy session
			// $this->session->sess_destroy();
		$this->load->view('login_view', $data);
		
    }
	
	public function process(){
		// redirect('dashboard');
		
        // Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }else{
            // If user did validate, 
            // Send them to members area
            redirect('dashboard');
        }        
    }
}
