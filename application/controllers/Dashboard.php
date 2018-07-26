<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if(!isset($this->session->userdata['username'])){
			 redirect(site_url(), 'refresh');
		}
		
	}
	public function index(){
		$this->load->view('header');
		$this->load->view('dashboard_view');
		$this->load->view('footer');
		// echo "dashboard";
	}
	
	/* for details category page */
	public function category($msg=null){
        // Load our view to be displayed
        // to the user
		//$msg=null;
       // $data['msg'] = "hello";
		$this->load->model('category_model');
		$data['category'] = $this->category_model->getCategoryData();
		
		$this->load->view('header');
        $this->load->view('category_view', $data);
		$this->load->view('footer');
	}
	/* for delete a category we just update status of category */
	function deleteCategory($catid){
		$this->load->model('category_model');
		$this->category_model->deleteCategory($catid);
		redirect('dashboard/category','refresh');
	}
	
	function editcategory($catid){
		//echo "here";
		$this->load->model('category_model');
		if ($this->input->post('submit')) {			
			$this->category_model->editCategory($catid);
			redirect('dashboard/category','refresh');
		}
		$data['catdata'] = $this->category_model->getCategoryData($catid);
		$this->load->view('header');
        $this->load->view('edit_cat_view',$data);
		$this->load->view('footer');
	}
	function addcategory(){
		
		if ($this->input->post('submit')) {
			
			$this->load->model('category_model');			
			$this->category_model->addCategory();
			redirect('dashboard/category','refresh');
		}
		
		$this->load->view('header');
        $this->load->view('add_cat_view');
		$this->load->view('footer');
	}
	
	/* for logout functionality */
	function logout(){
		$user_data = $this->session->all_userdata();
			foreach ($user_data as $key => $value) {
				if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
					$this->session->unset_userdata($key);
				}
			}
		$this->session->sess_destroy();
		redirect(site_url());
	}	
	
	/* for job */
	function opening(){
		$this->load->model('opening_model');
		$data['category'] = $this->opening_model->getOpeningData();
		$this->load->view('header');
        $this->load->view('opening_view',$data);
		$this->load->view('footer');
	}
	function addopening(){
		$this->load->library('ckeditor');
		$this->load->library('ckfinder');

		if($this->input->post('submit') && !empty($this->input->post('title'))) {		
		
			$this->load->model('opening_model');
			$this->opening_model->saveOpeningData();
			redirect('dashboard/opening','refresh');
		}

$this->ckeditor->basePath = base_url().'asset/ckeditor/';
$this->ckeditor->config['toolbar'] = array(
                array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
                                                    );
$this->ckeditor->config['language'] = 'it';
$this->ckeditor->config['width'] = '730px';
$this->ckeditor->config['height'] = '300px';            

//Add Ckfinder to Ckeditor
$this->ckfinder->SetupCKEditor($this->ckeditor,'../../asset/ckfinder/'); 
		
		
		$this->load->model('category_model');
		$data['category'] = $this->category_model->getCategoryData();
		
		$this->load->view('header');
        $this->load->view('add_opening_view',$data);
		$this->load->view('footer');
	}
	
	function editopening($oid){
		
		$this->load->library('ckeditor');
		$this->load->library('ckfinder');
		$this->ckeditor->basePath = base_url().'asset/ckeditor/';
$this->ckeditor->config['toolbar'] = array(
                array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
                                                    );
$this->ckeditor->config['language'] = 'it';
$this->ckeditor->config['width'] = '730px';
$this->ckeditor->config['height'] = '300px';            

//Add Ckfinder to Ckeditor
$this->ckfinder->SetupCKEditor($this->ckeditor,'../../asset/ckfinder/'); 
		
		$this->load->model('opening_model');
		$data['opdata'] = $this->opening_model->getOpeningData($oid);
		// print_r($data['opdata']);
		if ($this->input->post('submit')) {			
			$this->opening_model->updateOpeningData($oid);
			redirect('dashboard/opening','refresh');
		}
		
		
		$this->load->model('category_model');
		$data['category'] = $this->category_model->getCategoryData();
		
		$this->load->view('header');
        $this->load->view('edit_opening_view',$data);
		$this->load->view('footer');
	}
	
	
	/* function for handling role and permission of user */
	public function role(){
		$this->load->model('role_model');
		$data['roles'] = $this->role_model->getRoleData();
		
		$this->load->view('header');
        $this->load->view('role_view',$data);
		$this->load->view('footer');
	}
	public function addrole(){
		if($this->input->post('submit') ) {
			$this->load->model('role_model');
			$this->role_model->addRoleData();
			redirect('dashboard/role','refresh');
		}
		$this->load->view('header');
        $this->load->view('add_role_view');
		$this->load->view('footer');
	}
	public function editrole($rid){
		if($this->input->post('submit') ) {
			$this->load->model('role_model');
			$this->role_model->updateRoleData($rid);
			redirect('dashboard/role','refresh');
		}
		
		$this->load->model('role_model');
		$data['role'] = $this->role_model->getRoleDataByID($rid);
				
		$this->load->view('header');
        $this->load->view('add_role_view',$data);
		$this->load->view('footer');
	}
	public function deleteRole($rid){
		$this->load->model('role_model');
		$this->role_model->deleteRoleData($rid);
		redirect('dashboard/role','refresh');
	}
	/* end role section */
	
	/* start for User data */
	public function user(){
		$this->load->model('user_model');
		$data['users'] = $this->user_model->getUserData();
		
		$this->load->view('header');
        $this->load->view('user_view',$data);
		$this->load->view('footer');
	}
	/* end for user */
	public function galcat(){
		$this->load->model('gallery_model');
		$data['gal_cats'] = $this->gallery_model->getGalleryCatData();
		
		$this->load->view('header');
		$this->load->view('gal_cat_view',$data);
		$this->load->view('footer');		
	}
	public function addgalcat(){
		if($this->input->post('submit')){
			$this->load->model('gallery_model');
			$this->gallery_model->addGalleryCategory();
			redirect('dashboard/galcat','refresh');
		}
		
		$this->load->view('header');
		$this->load->view('add_gal_cat_view');
		$this->load->view('footer');		
	}
	public function editgalcat($catid){
		if($this->input->post('submit')){
			$this->load->model('gallery_model');
			$this->gallery_model->updateGalleryCategory($catid);
			redirect('dashboard/galcat','refresh');
		}
		
		$this->load->model('gallery_model');
		$data['galcats'] = $this->gallery_model->getGalleryCategorydataByid($catid);
		// print_r($data['galcats']);
		$this->load->view('header');
		$this->load->view('add_gal_cat_view');
		$this->load->view('footer');		
	}
}