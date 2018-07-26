<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Atul Kumar
 * Description: Opening Category model class
 */
class Gallery_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	
	
	/* for category add in gallery */
	public function getGalleryCatData(){
		$result = $this->db->get('gallery_category')->result();
		return $result;
	}
	public function addGalleryCategory(){
		$data = array(
			'name' => $this->input->post('name'),
			'status' =>$this->input->post('status')
		);
		$this->db->insert('gallery_category',$data);
	}
	public function updateGalleryCategory($catid){
		$data = array(
			'name' => $this->input->post('name'),
			'status' =>$this->input->post('status')
		);
		$this->db->where('id',$catid);
		$this->db->insert('gallery_category',$data);
	}
	public function getGalleryCategorydataByid($catid){
		$this->db->where('id',$catid);
		$result = $this->db->get('gallery_category')->result();
		return $result;
	}
}