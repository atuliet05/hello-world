 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Atul Kumar
 * Description: Opening Category model class
 */
 
 class Opening_model extends CI_Model{
	function __construct(){
        parent::__construct();
    }
	
	function getOpeningData($id = null){
		if(empty($id)){
			$query = $this->db->query("SELECT * FROM `openings` order by `status` asc ");
			$query = $query->result();
			return $query;
		}else{
			$query = $this->db->query("SELECT * FROM `openings` where `id` = '".$id."'");
			$query = $query->result();
			return $query;
		}
	}
	function saveOpeningData(){
		$data = array(
                    'title' => $this->input->post('title'),
                    'body' => htmlentities($this->input->post('opening')),
                    'status' => $this->input->post('status'),
					'cat_id' => $this->input->post('category'),
					'title2' => $this->input->post('title2'),
					'responsibilities' =>serialize(array_filter($this->input->post('respnsblt'))),
					'prfrdskill' =>serialize(array_filter($this->input->post('prfrdskill'))),
                );
				// serialize
		// $query = "INSERT INTO `openings` (`title`, `body`, `status`,`cat_id`) VALUES ('".$data['title']."', '".$data['opening']."', '".$data['status']."','".$data['cat_id']."')";
		// $this->db->query($query);
		$this->db->insert('openings',$data);
	}
	
	function updateOpeningData($oid){
		$data = array(
                    'title' => htmlentities($this->input->post('title')),
                    'body' => htmlentities($this->input->post('opening')),
                    'status' => $this->input->post('status'),
					'cat_id' => $this->input->post('category'),
					'title2' => $this->input->post('title2'),
					'responsibilities' =>serialize(array_filter($this->input->post('respnsblt'))),
					'prfrdskill' =>serialize(array_filter($this->input->post('prfrdskill'))),					
                );
		
		// $query = "INSERT INTO `openings` (`title`, `body`, `status`) VALUES ('".$data['title']."', '".$data['opening']."', '".$data['status']."')";
		/*$query= "update `openings` set `body`='".$data['opening']."' ,`status`=".$data['status']." where `id`=".$oid;
		$this->db->query($query);*/
		
		$this->db->update('openings', $data, array('id' => $oid)); 
	}
 }