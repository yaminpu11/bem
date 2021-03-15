<?php defined("BASEPATH") OR exit("No direct script access allowed");

  class C_dashboard extends MY_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->model('m_tentang');
        $this->load->model('m_beranda');

        if($this->config->item('maintenance_mode') == TRUE) {
            $this->load->view('template/maintenance_view');
            die();
        }
    }

    private function temp($page){

    }


    function index(){

        $page = '';
        $data["pageTitle"] = "Dashboard";
        $content = $this->load->view('beranda/beranda',$data,true);
        parent::template($content);
    }

    function indexOke()
    {
      // Data ini akan ditampilkan di header pada tag <title>
      
      $data["pageTitle"] = "Dashboard";
      $data["pageContent"] = $this->load->view("template/V_content",$data, TRUE);
    }

// <========= 404 =========> //
    function page_404(){
      $content = $this->load->view("template/404",'',false);
    }

    function prospective()
    {
      $data['prospective'] = $this->m_tentang->sambutan();
      $content = $this->load->view('template/coming_soon',$data,true);
      parent::template($content);
    }
    function prodi()
    {
      $data['prodi'] = $this->m_beranda->prodi();
      $content = $this->load->view('beranda/V_prodi',$data,true);
      parent::template($content);
    }
//======== sambutan === =====//    
    function sambutan()
    {
      // Memanggil view sambutan
      $data['sambutan'] = $this->m_tentang->sambutan();
      $content=$this->load->view("tentang/V_sambutan",$data,true);
       parent::template($content);
    }

    function visi_misi()
    {
      $data['visi'] = $this->m_tentang->visi();
      // Memanggil view visi_misi
      $content=$this->load->view("tentang/V_visi-misi",$data,true);
      parent::template($content);
     
    }
     function structure()
    {
      // Memanggil view structure
      // $this->load->view("tentang/v_structure");
      $data['structure'] = $this->m_tentang->sambutan();
      $content=$this->load->view("tentang/V_structure",$data,true);
      parent::template($content);
    }
    function dosen()
    {
      // Memanggil view dosen
      $data['dosen'] = $this->m_beranda->dosen();
      $content=$this->load->view("tentang/V_dosen", $data, TRUE);
      parent::template($content);
    }

    

    function fasilitas()
    {
      // Memanggil view fasilitas
      $data['fasilitas'] = $this->m_tentang->fasilitas();
      $content=$this->load->view("tentang/V_fasilitas",$data,true);
      parent::template($content);
    }

    function artikel()
    {
      // Memanggil view artikel
      $data['news'] = $this->m_beranda->news();
      $content=$this->load->view("artikel/V_artikel",$data,true);
      parent::template($content);
    }
    function details_news()
    {
      // Memanggil view details_news
      $data['details_news'] = $this->m_beranda->details_news();
      $content=$this->load->view("artikel/read_news",$data,true);
      parent::template($content);
    }
    function agenda()
    {
      // Memanggil view agenda
      // $this->load->view("agenda/v_agenda");
      $data['sambutan'] = $this->m_tentang->sambutan();
      $content=$this->load->view("template/coming_soon",$data,true);
      parent::template($content);
    }
    function mahasiswa()
    {
      // Memanggil view mahasiswa
      // $this->load->view("mahasiswa/v_mahasiswa");
    $data['sambutan'] = $this->m_tentang->sambutan();
     $content= $this->load->view("template/coming_soon",$data,true);
     parent::template($content);
    }
    function gallery()
    {
      // Memanggil view galeri
      $data['gallery'] = $this->m_beranda->gallery();
      $content=$this->load->view("galeri/V_galeri", $data, TRUE);
      parent::template($content);
    }

    function penelitian()
    {
      // Memanggil view penelitian
      // $this->load->view("penelitian/v_penelitian");
      $data['sambutan'] = $this->m_tentang->sambutan();
      $content=$this->load->view("template/coming_soon",$data,true );
      parent::template($content);
    }

    function history()
    {
      // Memanggil view history
      $data['sambutan'] = $this->m_tentang->sambutan();
      $content=$this->load->view("tentang/V_history",$data,true );
      parent::template($content);
    }

    function brille()
    {
      // Memanggil view brille
      $data['sambutan'] = $this->m_tentang->sambutan();
      $content=$this->load->view("tentang/V_brille",$data,true );
      parent::template($content);
    }

    function openoffer()
    {
      // Memanggil view openoffer
      $data['sambutan'] = $this->m_tentang->sambutan();
      $content=$this->load->view("tentang/V_openoffer",$data,true );
      parent::template($content);
    }
    
    function kontak()
    {

      // pass uniqueID
      $data['uniqid'] = $this->set_unique_id();
    
      // Memanggil view kontak
      $data['kontak'] = $this->m_beranda->kontak();
      $content=$this->load->view("kontak/V_kontak", $data, TRUE);
      parent::template($content);
    }


    function knowledge()
    {
      // Memanggil view knowledge
      // header('Access-Control-Allow-Origin: *');
      // header('Content-Type: application/json');
      // $data_arr = $this->getInputToken();
      // $LangCode = $data_arr['LangCode'];
      // $hasil= $this->db->query('SELECT cat.ID,cat.Name,COUNT(pt.ID_CatBase) jml FROM db_prodi.category_knowledge cat 
      //                               LEFT JOIN db_prodi.prodi_texting pt on cat.ID=pt.ID_CatBase
      //                               LEFT JOIN db_prodi.language l ON (l.ID = pt.LangID)
      //                               where l.Code LIKE "'.$LangCode.'"
      //                               GROUP BY cat.ID,cat.Name')->result();
      //   return $hasil;
      $data['allcategory'] = $this->m_tentang->list_allcategory();
      $content=$this->load->view("tentang/V_knowledge",$data,true);
      parent::template($content);
    }


    public function set_unique_id(){
      $uniqid = 'PU--'.uniqid().'%$';
      $this->session->set_userdata('PUuniqueID',$uniqid);
      return $uniqid;
    }

    public function kontak_crud(){
      header('Access-Control-Allow-Origin: *');
      header('Content-Type: application/json');
      $Input = $this->getInputToken();
      $action = $Input['action'];
      $uniqid = $Input['uniqid'];
      if ($uniqid == $this->session->userdata('PUuniqueID') ) {
          if ($action == 'add') {
              $dataSave = $Input['data'];
              $dataSave = json_decode(json_encode($dataSave),true);
              $dataSave['CreateAT'] = date('Y-m-d H:i:s');
              $this->db->insert('db_prodi.contact',$dataSave);
              echo json_encode(1);
          }
          else
          {
            // handling orang iseng
            echo '{"status":"999","message":"Not Authorize"}';
          }
      }
      else{
        // handling orang iseng
        echo '{"status":"999","message":"Not Authorize"}';
      }

      $this->set_unique_id();
     
    }


  }
?>