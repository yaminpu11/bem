<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda extends CI_Model{
	public function __construct()
    {
        parent::__construct();
        // Load database prodi
        $this->load->library('JWT');
        
    }
    function news()
    {
    	
    }
    function details_news()
    {
        
    }
    function gallery()
    {
       
    }
    function kontak()
    {
        
    }
    function dosen()
    {
       
    }
    function prodi()
    {
       
    }

   
    

    private function getInputToken2()
    {
        $token = $this->input->post('token');
        $key = "UAP)(*";
        $data_arr = (array) $this->jwt->decode($token,$key);
        return $data_arr;
    }
    
    public function is_url_exist($url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if($code == 200){
            $status = true;
        }else{
            $status = false;
        }
        curl_close($ch);
        return $status;
    }

    public function getNameUpdateBY($whereField = 'a.UpdateBY',$asfield = 'UpdateBY'){
        $str = 'if( 
                     (select count(*) as total from db_employees.employees where NIP = '.$whereField.' limit 1 ) = 1,
                        #True
                        (select Name from db_employees.employees where NIP = '.$whereField.' limit 1 ),
                        #False
                        (select Name from db_academic.auth_students where NPM = '.$whereField.' limit 1)  
                  ) as '.$asfield.' ';
        return $str;
    }

    public function getNewsBloglimit (){

        $data_arr = $this->getInputToken2();
        $IDType = $data_arr['type']; 

        $sql = 'select sg.* from db_blogs.set_group AS sg
                        WHERE sg.GroupName="'.$IDType.'" ';
        $query=$this->db->query($sql, array())->result_array();
        if(count($query==0)){
            return[];
        }
        $getGroupID= $query[0]['ID_set_group'];
        // print_r($getGroupID);
        $hasil= $this->db->query('select * from db_blogs.article as art
                LEFT JOIN db_blogs.set_group as sg on (art.ID_set_group = sg.ID_set_group)
                where art.ID_set_group="'.$getGroupID.'" AND art.status="Published"
                order by art.ID_title desc limit 12')->result();

        // return $hasil->result();

        for ($i=0; $i < count($hasil); $i++) { 
            $hasil[$i]->CreateAT=date("d M, Y", strtotime($hasil[$i]->CreateAT));
            $string=$hasil[$i]->Title;
            $replace = '-';         
            $string = strtolower($string);     
            //replace / and . with white space     
            $string = preg_replace("/[\/\.]/", " ", $string);     
            $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);     
            //remove multiple dashes or whitespaces     
            $string = preg_replace("/[\s-]+/", " ", $string);     
            //convert whitespaces and underscore to $replace     
            $string = preg_replace("/[\s_]/", $replace, $string);

            $slug=$string;
            $hasil[$i]->SEO_title=$slug;
            $url=url_blog_admin.'upload/'.$hasil[$i]->Images;
            
            $cek=$this->is_url_exist($url);
            if(!$cek){
                $hasil[$i]->Images='default.png';
            }

        }

        return $hasil;  
    }

    public function getNewsBloglAll ($type,$rowno,$rowperpage){

        $data_arr = $this->getInputToken2();
        $IDType = $data_arr['type']; 

        $sql = 'select sg.* from db_blogs.set_group AS sg
                        WHERE sg.GroupName="'.$IDType.'" ';
        $query=$this->db->query($sql, array())->result_array();
        $getGroupID= $query[0]['ID_set_group'];
        // print_r($getGroupID);die();
        $hasil= $this->db->query('select * from db_blogs.article as art
                LEFT JOIN db_academic.auth_students a on (art.UpdateBY=a.NPM)
                LEFT JOIN db_blogs.set_group as sg on (art.ID_set_group = sg.ID_set_group)
                where art.ID_set_group="'.$getGroupID.'" AND art.status="Published"
                order by art.ID_title desc limit '.$rowno.','.$rowperpage.'')->result();

        // return $hasil->result();

        for ($i=0; $i < count($hasil); $i++) { 
            $hasil[$i]->CreateAT=date("d M, Y", strtotime($hasil[$i]->CreateAT));
            $string=$hasil[$i]->Title;
            $replace = '-';         
            $string = strtolower($string);     
            //replace / and . with white space     
            $string = preg_replace("/[\/\.]/", " ", $string);     
            $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);     
            //remove multiple dashes or whitespaces     
            $string = preg_replace("/[\s-]+/", " ", $string);     
            //convert whitespaces and underscore to $replace     
            $string = preg_replace("/[\s_]/", $replace, $string);

            $slug=$string;
            $hasil[$i]->SEO_title=$slug;
            $url=url_blog_admin.'upload/'.$hasil[$i]->Images;
            
            $cek=$this->is_url_exist($url);
            if(!$cek){
                $hasil[$i]->Images='default.png';
            }

        }

        return $hasil;  
    }
    // Select total records
    public function getrecordCount() {
        $data_arr = $this->getInputToken2();
        $IDType = $data_arr['type']; 
        
        $sql = 'select sg.* from db_blogs.set_group AS sg
                        WHERE sg.GroupName="'.$IDType.'" ';
        $query=$this->db->query($sql, array())->result_array();
        $getGroupID= $query[0]['ID_set_group'];
        // print_r($getGroupID);
        $result = $this->db->query('select count(*) as allcount from db_blogs.article as art
                LEFT JOIN db_blogs.set_group as sg on (art.ID_set_group = sg.ID_set_group)
                where art.ID_set_group="'.$getGroupID.'" AND art.status="Published" order by art.ID_title desc')->result_array();

        return $result[0]['allcount'];
    }


    public function getDataContentall($type){      
        
        $data_arr = $this->getInputToken2();
        $IDType = $data_arr['type'];
        $sql = 'select ci.* from db_podivers.content_index AS ci
                WHERE ci.SegmentMenu="'.$IDType.'" ';
        $query=$this->db->query($sql, array())->result_array();
        $idindex = $query[0]['ID'];
        
        // print_r($setgroup);die();
        if($IDType=='event'){

            $data = $this->db->query('SELECT c.* , ci.SegmentMenu , e.Name, sg.GroupName
            FROM db_podivers.content c 
            LEFT JOIN db_podivers.content_index ci ON (ci.ID = c.IDindex)
            LEFT JOIN db_employees.employees e ON (e.NIP=c.CreateBy)
            LEFT JOIN db_podivers.set_group sg on (c.ID_set_group=sg.ID_set_group)
            WHERE c.IDindex ='.$idindex.' and c.Status="Yes" ORDER BY c.AddDate ASC')->result_array();

        }else{
            $data = $this->db->query('SELECT c.*, ci.SegmentMenu , e.Name
            FROM db_podivers.content c 
            LEFT JOIN db_podivers.content_index ci ON (ci.ID = c.IDindex)
            LEFT JOIN db_employees.employees e ON (e.NIP=c.CreateBy)
            WHERE c.IDindex ='.$idindex.' and c.Status="Yes" ')->result_array();
        }        

        for ($i=0; $i < count($data); $i++) {
            $string=$data[$i]['Title'];
            $replace = '-';         
            $string = strtolower($string);     
            //replace / and . with white space     
            $string = preg_replace("/[\/\.]/", " ", $string);     
            $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);     
            //remove multiple dashes or whitespaces     
            $string = preg_replace("/[\s-]+/", " ", $string);     
            //convert whitespaces and underscore to $replace     
            $string = preg_replace("/[\s_]/", $replace, $string);

            $slug=$string;
            $data[$i]['SEO_title']=$slug;
            // print_r($data);die();
            // $url=url_blog_admin.'upload/podivers'.$data[$i]['File'];
            // $cek=$this->is_url_exist($url);
            //     if(!$cek){
            //         $data[$i]['File']='Default.png';
            //     }
            
        }
        // print_r($data);die();
        return $data;
    }

    public function getDataContent($type){      
        
        $data_arr = $this->getInputToken2();
        $IDType = $data_arr['type'];
        
        // print_r($setgroup);die();
        $sql = 'select ci.* from db_podivers.content_index AS ci
                WHERE ci.SegmentMenu="'.$IDType.'" ';
        $query=$this->db->query($sql, array())->result_array();
        $idindex = $query[0]['ID'];
        
        // print_r($setgroup);
        if($IDType=='event'){
            // $setgroup = $data_arr['setgroup'];
            $data = $this->db->query('SELECT c.* , ci.SegmentMenu , e.Name, sg.GroupName
            FROM db_podivers.content c 
            LEFT JOIN db_podivers.content_index ci ON (ci.ID = c.IDindex)
            LEFT JOIN db_employees.employees e ON (e.NIP=c.CreateBy)
            LEFT JOIN db_podivers.set_group sg on (c.ID_set_group=sg.ID_set_group)
            WHERE c.IDindex ='.$idindex.' and c.Status="Yes" ORDER BY c.AddDate ASC')->result_array();

        }else{
            $data = $this->db->query('SELECT c.*, ci.SegmentMenu , e.Name
            FROM db_podivers.content c 
            LEFT JOIN db_podivers.content_index ci ON (ci.ID = c.IDindex)
            LEFT JOIN db_employees.employees e ON (e.NIP=c.CreateBy)
            WHERE c.IDindex ='.$idindex.' and c.Status="Yes" ')->result_array();
        }        

        for ($i=0; $i < count($data); $i++) {
            $string=$data[$i]['Title'];
            $replace = '-';         
            $string = strtolower($string);     
            //replace / and . with white space     
            $string = preg_replace("/[\/\.]/", " ", $string);     
            $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);     
            //remove multiple dashes or whitespaces     
            $string = preg_replace("/[\s-]+/", " ", $string);     
            //convert whitespaces and underscore to $replace     
            $string = preg_replace("/[\s_]/", $replace, $string);

            $slug=$string;
            $data[$i]['SEO_title']=$slug;
            // print_r($data);die();
            // $url=url_blog_admin.'upload/podivers'.$data[$i]['File'];
            // $cek=$this->is_url_exist($url);
            //     if(!$cek){
            //         $data[$i]['File']='Default.png';
            //     }
            
        }
        // print_r($data);die();
        return $data;
    }

    // set group
    public function getDataContentGroup($type,$setgroup){      
        
        $data_arr = $this->getInputToken2();
        $IDType = $data_arr['type'];
        $setgroup = $data_arr['setgroup'];
        // print_r($setgroup);die();
        $sql = 'select ci.* from db_podivers.content_index AS ci
                WHERE ci.SegmentMenu="'.$IDType.'" ';
        $query=$this->db->query($sql, array())->result_array();
        $idindex = $query[0]['ID'];
        
        // print_r($setgroup);
        if($IDType=='event'){            
            $data = $this->db->query('SELECT c.* , ci.SegmentMenu , e.Name, sg.GroupName
            FROM db_podivers.content c 
            LEFT JOIN db_podivers.content_index ci ON (ci.ID = c.IDindex)
            LEFT JOIN db_employees.employees e ON (e.NIP=c.CreateBy)
            LEFT JOIN db_podivers.set_group sg on (c.ID_set_group=sg.ID_set_group)
            WHERE c.IDindex ='.$idindex.' and c.Status="Yes" and sg.GroupName="'.$setgroup.'" ORDER BY c.AddDate ASC')->result_array();

        }else{
            $data = $this->db->query('SELECT c.*, ci.SegmentMenu , e.Name
            FROM db_podivers.content c 
            LEFT JOIN db_podivers.content_index ci ON (ci.ID = c.IDindex)
            LEFT JOIN db_employees.employees e ON (e.NIP=c.CreateBy)
            WHERE c.IDindex ='.$idindex.' and c.Status="Yes" ')->result_array();
        }        

        for ($i=0; $i < count($data); $i++) {
            $string=$data[$i]['Title'];
            $replace = '-';         
            $string = strtolower($string);     
            //replace / and . with white space     
            $string = preg_replace("/[\/\.]/", " ", $string);     
            $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);     
            //remove multiple dashes or whitespaces     
            $string = preg_replace("/[\s-]+/", " ", $string);     
            //convert whitespaces and underscore to $replace     
            $string = preg_replace("/[\s_]/", $replace, $string);

            $slug=$string;
            $data[$i]['SEO_title']=$slug;
            // print_r($data);die();
            // $url=url_blog_admin.'upload/podivers'.$data[$i]['File'];
            // $cek=$this->is_url_exist($url);
            //     if(!$cek){
            //         $data[$i]['File']='Default.png';
            //     }
            
        }
        // print_r($data);die();
        return $data;
    }

    public function GetDataContentDetails($type,$ID){
        $data_arr = $this->getInputToken2();
        $IDType = $data_arr['type'];
        $ID = $data_arr['ID'];

        $sql = 'select ci.* from db_podivers.content_index AS ci
                WHERE ci.SegmentMenu="'.$IDType.'" ';
        $query=$this->db->query($sql, array())->result_array();
        $idindex = $query[0]['ID'];
        
        // print_r($IDType).die();
        $data = $this->db->query('SELECT c.* , ci.SegmentMenu , e.Name
            FROM db_podivers.content c 
            LEFT JOIN db_podivers.content_index ci ON (ci.ID = c.IDindex)
            LEFT JOIN db_employees.employees e ON (e.NIP=c.CreateBy)
            WHERE c.ID="'.$ID.'" and c.IDindex ='.$idindex.' and c.Status="Yes" ')->result_array();
        return $data;
    }



}
?>