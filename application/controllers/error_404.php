<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("error_404.php"); default

	}
}

?>