<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tentang extends CI_Model{
	function __construct()
	{
		parent::__construct();
			
	}


    function visi()
    {	

    	$query =$this->db->query("SELECT * from db_academic.program_study_detail where ProdiID = '1'")->result_array();

    	return $query[0];
        
    }
    function list_allcategory(){        
        // $LangCode = $this->input->post('current_language');
        // print_r($LangCode);die();
        $hasil= $this->db->query('SELECT cat.ID,cat.Name,COUNT(pt.ID_CatBase) jml FROM db_prodi.category_knowledge cat 
                                    LEFT JOIN db_prodi.prodi_texting pt on cat.ID=pt.ID_CatBase
                                    LEFT JOIN db_prodi.language l ON (l.ID = pt.LangID)
                                    GROUP BY cat.ID,cat.Name')->result();
        return $hasil;
    }

    function sambutan()
    {
    	$query =$this->db->query('SELECT * from db_prodi.sambutan');
        if ($query->num_rows() > 0) {
         	return $query->row();
     	}
     	return $query->result();
    }

    function fasilitas()
    {
    	$query =$this->db->query('SELECT * from db_prodi.facilities');
     	return $query->result();
    }
    function prospective()
    {
       
    }


}
?>