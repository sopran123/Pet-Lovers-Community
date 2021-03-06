<?php

class Postmodel extends CI_Model {
  public function _construct(){
    $this->load->database();
  }

  public function create_post(){
      $file= base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
      $user = $this->session->userdata('username');
      $conn = new mysqli('localhost','root','','plc_db');
      $query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
  		$result = $conn->query($query);
  		if($result->num_rows > 0){
  			while($row = $result->fetch_assoc()){
          $accid = $row['AccountID'];
        }
        $field= array(
                  'ServType'=>$this->input->post('service'),
                  'ServImage'=>$file,
                  'ServDesc'=>$this->input->post('description'),
                  'ServContact'=>$this->input->post('contact'),
                  'ServAddress'=>$this->input->post('address')
        );
        $query=$this->db->insert('service', $field);
        return true;
      }

      $conn = new mysqli('localhost', 'root', '', 'plc_db');
  		$query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
  		$result = $conn->query($query);
  		if($result->num_rows > 0){
  			while($row = $result->fetch_assoc()){
          $accid = $row['AccountID'];
        }
          $conn = new mysqli('localhost', 'root', '', 'plc_db');
      		$query = 'Select PetID from pet where AccountID = "'.$accid.'"';
      		$result = $conn->query($query);
      		if($result->num_rows > 0){
      			while($row = $result->fetch_assoc()){
              $petid = $row['PetID'];
            }
            $field = array(
              'AccountID' => $accid,
              'PetID' => $petid,
              'PostComment' => $this->input->post('usrpst')
            );
            $this->db->insert('post', $field);
            return "true";
          }
      }

  }
  public function getData(){
	  $this->db->select('accbio.*, service.*');
    $this->db->from('service');
    $this->db->join('accbio', 'accbio.AccountID = service.AccountID');
      $query=$this->db->get();
      return $query->result_array();
  }

  public function getPost(){
	    $this->db->order_by('ServiceID', 'desc');
	    $query = $this->db->get('service');
	    if($query->num_rows() > 0){
	      	return $query->result();
	    }
	    else{
	      	return false;
	    }
  	}

  	public function deletepost($id){
	    $this->db->where('ServiceID', $id);
	    $this->db->delete('service');
	    if($this->db->affected_rows() > 0){
	      return true;
	    }
	    else{
	      return false;
	    }
  	}


}
