<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("product_model");
	}

	public function index($id = null)
	{
	    $data["products"] = $this->product_model->getAll();
	    //if (!isset($id)) redirect('admin/products');
	   
	    $product = $this->product_model;
	    
	    $this->load->view("admin/v_riwayat", $data);
	}
}
