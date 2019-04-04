<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar_Proposal extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        $this->load->view("admin/v_seminar_proposal");
	}
}
