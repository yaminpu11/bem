<?php defined("BASEPATH") OR exit("No direct script access allowed");

  class C_branda extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        // header('Access-Control-Allow-Origin: *');
        // header('Content-Type: application/json');
        $this->load->model('m_beranda');       
        $this->load->helper('url');
        $this->load->library('JWT');
        $this->load->library('pagination');

    }

    public function getInputToken()
    {
        $token = $this->input->post('token');
        $data_arr = $this->decodeToken($token);
        return $data_arr;
    }

    public function decodeToken($token){
        $key = "UAP)(*";
        $data_arr = json_decode(json_encode($this->jwt->decode($token,$key)),true);
        return $data_arr;
    }

    // Testimonial
    // function load_testimonial(){
    //     $data=$this->m_beranda->getTestimonial();
    //     return print_r(json_encode($data));
    // }

    // News BY Blog
    function load_newsbyblog(){
        $Input = $this->getInputToken();
        $type=$Input['type'];
        $data=$this->m_beranda->getNewsBloglimit($type);
        return print_r(json_encode($data));
    }

    // News BY Blog all
    function getnewsbloglall($rowno=0){
        $Input = $this->getInputToken();
        $type=$Input['type'];
        // print_r($type);die();
        // $data=$this->m_beranda->getNewsBloglAll($type);
        

        // Row per page
        $rowperpage = 10;

        // Row position
        if($rowno != 0){
          $rowno = ($rowno-1) * $rowperpage;
        }
     
        // All records count
        $allcount = $this->m_beranda->getrecordCount($type);

        // Get records
        $users_record = $this->m_beranda->getNewsBloglAll($type,$rowno,$rowperpage);
     
        // Pagination Configuration
        $config['base_url'] = base_url().$type;
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;

        $config['full_tag_open']    = '<div class="pagging text-center"><nav class="py-5"><ul class="pagination pagination-circle pg-blue justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close']  = '</span></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close']  = '</span></li>';

        // Initialize
        $this->pagination->initialize($config);

        // Initialize $data Array
        $data['pagination'] = $this->pagination->create_links();
        $data['result'] = $users_record;
        $data['row'] = $rowno;
        return print_r(json_encode($data));
    }

    //Content 
    function load_content(){
        $Input = $this->getInputToken();
        $type=$Input['type']; 
        // $setgoup=$Input['setgoup']; 
        // print_r($setgoup);die();
        $data=$this->m_beranda->getDataContent($type);        
        return print_r(json_encode($data));

    }
    //Content 
    function load_contentgroup(){
        $Input = $this->getInputToken();
        $type=$Input['type']; 
        $setgroup=$Input['setgroup']; 
        // print_r($setgoup);die();
        $data=$this->m_beranda->getDataContentGroup($type,$setgroup);        
        return print_r(json_encode($data));

    }
    //Content 
    function load_contentall(){
        $Input = $this->getInputToken();
        $type=$Input['type']; 
        $data=$this->m_beranda->getDataContentall($type);        
        return print_r(json_encode($data));

    }

    // Load Detail
    function load_details(){

        $Input = $this->getInputToken();
        $type = $Input['type'];
        $ID = $Input['ID'];
        $data = $this->m_beranda->GetDataContentDetails($type,$ID);   
        return print_r(json_encode($data));


    }

   

}

