<?php
class User extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function getUsers(){
       
        $query = $this->db->get('users');

        //returning
        if ($query->num_rows() > 0){
            return $query->result();
        }
        else{
            return null;
        } 
    }

    function getUser($id = ''){
    	$this->db->where('id',$id);
    	$query = $this->db->get('users',1);

    	//returning
    	if ($query->num_rows() > 0){
    		return $query->row();
    	}
    	else{
    		return null;
    	}
        
    }

    function store($user = array()){

        $this->db->insert('users', $user);
        return $this->db->insert_id();

    }

    function update($user = array())
    {
        $this->db->where('id', $user['id']);
        $this->db->update('users', $user);
        return $this->db->affected_rows();
    }

    
    
     function delete($id = '')
    {
        $this->db->where('id',$id);
        
        if ($this->db->delete('users')) {
            return true;
        }else{
            return false;
        }
    }

    function login($email,$password){

        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $query = $this->db->get('users',1);

        //returning
        if ($query->num_rows() > 0){
            return $query->row();
        }
        else{
            return null;
        }

    }
    
}


?>