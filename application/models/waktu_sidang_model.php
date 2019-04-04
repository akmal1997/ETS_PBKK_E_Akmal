<?php defined('BASEPATH') OR exit('No direct script access allowed');

class waktu_sidang_model extends CI_Model
{
    private $_table = "waktu_sidang";

    public $nrp;
    public $nama;
    public $waktu_mulai;
    public $waktu_selesai;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($nrp_id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $nrp_id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nrp = $post["nrp"];
        $this->nama = $post["nama"];
        $this->waktu_mulai = $post["waktu_mulai"];
        $this->waktu_selesai = $post["waktu_selesai"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nrp = $post["nrp"];
        $this->nama = $post["nama"];
        $this->waktu_mulai = $post["waktu_mulai"];
        $this->waktu_selesai = $post["waktu_selesai"];
        $this->db->update($this->_table, $this, array('nrp' => $post['nrp']));
    }

    public function delete($id)
    {
		$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("nrp" => $nrp_id));
	}
}
