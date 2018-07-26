<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Atul Kumar
 * Description: Opening Category model class
 */
class Category_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function getCategoryData($id = null){
		if(empty($id)){
			$query = $this->db->query("SELECT * FROM `opening_category_master`");
			$query = $query->result();
			return $query;
		}else{
			$query = $this->db->query("SELECT * FROM `opening_category_master` where `id` = $id");
			$query = $query->result();
			return $query;
			
		}
	}
	
	function deleteCategory($catid){
		$this->db->query("update `opening_category_master` set `status`='0' where id=$catid");
	}
	function editCategory($catid){
		//$this->db->query("update `opening_category_master` set `status`='0' where id=$catid");
		// echo '<pre>';
		
		 $data = array(
                    'name' => $this->input->post('cat_name'),
                    'status' => $this->input->post('status'),
                    // 'address' => $this->input->post('address')
                );
				// print_r($data);
		// die;
		$this->db->query("update `opening_category_master` set `status`='".$data['status']."' where id=$catid");
	}
	function addCategory(){
		//$this->db->query("update `opening_category_master` set `status`='0' where id=$catid");
		// echo '<pre>';
		
		 $data = array(
                    'cat_name' => $this->input->post('cat_name'),
                    'status' => $this->input->post('status'),
                    // 'address' => $this->input->post('address')
                );
				// print_r($data);
		// die;
		// $this->db->query("update `opening_category_master` set `status`='".$data['status']."' where id=$catid");
		$this->db->insert('opening_category_master', $data); 
	}
}
?>