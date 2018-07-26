 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        //echo md5($password);
        // Prep the query
       // $this->db->where('name', $username);
       // $this->db->where('password', md5($password));
        
        // Run the query
        //$query = $this->db->get('user');
        $query = $this->db->query("SELECT * FROM `user` WHERE `name` = '".$username."' AND `password` = '".md5($password)."'");
		$query = $query->result();
		//echo $this->db->last_query();
		// echo '<pre>';
		// print_r($query);
        // Let's check if there are any results
		
        // if($query->num_rows == 1)
        if(isset($query[0]) && !empty($query))
        {
			//echo "here";
            // If there is a user, then create session data
            $row = $query[0];
            $data = array(
                    'userid' => $row->id,
                    // 'name' => $row->fname,
                    // 'lname' => $row->lname,
                    'username' => $row->name,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
			// echo '<pre>';
			// print_r($this->session->userdata);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
}
?>