<?php

/**
* Clase para gestionar los datos del Personal
*/
class Personal extends CI_Model
{
	
	function __construct()
	{
		 parent::__construct();
	}

	function getPersonal()
	{
		$query = $this->db->get('personal');

        //returning
        if ($query->num_rows() > 0){
            return $query->result();
        }
        else{
            return null;
        } 
	}

	function getPersona($id='')
	{
		$this->db->where('id',$id);
    	$query = $this->db->get('personal',1);

    	//returning
    	if ($query->num_rows() > 0){
    		return $query->row();
    	}
    	else{
    		return null;
    	}
	}


}