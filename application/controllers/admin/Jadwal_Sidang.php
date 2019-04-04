<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_Sidang extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("waktu_sidang_model");
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data["waktu_sidang"] = $this->waktu_sidang_model->getAll();
		$waktu_sidang_1 = $this->waktu_sidang_model;
        	$this->load->view("admin/v_jadwal_sidang", $data );
	}

	public function isi_jadwal_sidang()
	{
	    $waktu_sidang_1 = $this->waktu_sidang_model;
	    $validation = $this->form_validation;
	    $validation->set_rules($waktu_sidang_1->rules());
    
	    if ($validation->run()) {
		$waktu_sidang_1->save();
		$this->session->set_flashdata('success', 'Berhasil disimpan');
	    }
    
	    $this->load->view("admin/v_isi_jadwal_sidang");
	}
}
