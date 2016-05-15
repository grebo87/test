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

	function getPuestos()
	{
		$query = $this->db->get('puestos');

        //returning
        if ($query->num_rows() > 0){
            return $query->result();
        }
        else{
            return null;
        } 
	}

	function storePersonal($personal = [])
	{
		$this->db->insert('personal', $personal);
        return $this->db->insert_id();
	}

	function storeDomicilio($domicilio = [])
	{
		$this->db->insert('domicilio', $domicilio);
        return $this->db->insert_id();
	}

	function getDomicilio($personal_id='')
	{
		$this->db->where('personal_id',$personal_id);
    	$query = $this->db->get('domicilio',1);

    	//returning
    	if ($query->num_rows() > 0){
    		return $query->row();
    	}
    	else{
    		return null;
    	}
	}

	function getPuesto($puesto_id='')
	{
		$this->db->where('id',$puesto_id);
    	$query = $this->db->get('puestos',1);

    	//returning
    	if ($query->num_rows() > 0){
    		return $query->row();
    	}
    	else{
    		return null;
    	}
	}

	function updateDomicilio($domicilio = [])
	{
		$this->db->where('id', $domicilio['domicilio_id']);
		unset($domicilio['domicilio_id']);
        $this->db->update('domicilio', $domicilio);
        return $this->db->affected_rows();
	}

	function updatePuesto($personal = [])
	{
		$this->db->where('id', $personal['personal_id']);
		unset($personal['personal_id']);
        $this->db->update('personal', $personal);
        return $this->db->affected_rows();
    }
	
	function updateDatosGenerales($personal = [])
	{
		$this->db->where('id', $personal['id']);
		unset($personal['id']);
        $this->db->update('personal', $personal);
        return $this->db->affected_rows();
	}

	function delete($id='')
	{
		$this->db->where('id', $id);		
        $this->db->delete('personal');
        return $this->db->affected_rows();
	}


}