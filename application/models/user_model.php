<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Atul Kumar
 * Description: Opening Category model class
 */
class User_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function getUserData(){
		$result = $this->db->get('user')->result();
		return $result;
	}
	public function addRoleData(){
		
		$data = array(
			'role'=>$this->input->post('role'),
			'status'=>$this->input->post('status')
		);
		$this->db->insert('role',$data);
	}
	public function getRoleDataByID($rid){
		$this->db->where('role_id',$rid);
		$result = $this->db->get('role')->result();
		return $result;
	}
	public function updateRoleData($rid){
		$data=array(
			'role'=>$this->input->post('role'),
			'status'=>$this->input->post('status')
		);
		
		$this->db->where('role_id',$rid);
		$this->db->update('role',$data);
	}
	
	public function deleteRoleData($rid){
		$data = array(
			'status'=>0,
		);
		
		$this->db->where('role_id',$rid);
		$this->db->update('role',$data);
	}
}
