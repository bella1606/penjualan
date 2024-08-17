<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model("Supplier_model");
        $this->load->library('form_validation');
    }
	public function index()
	{
        $data = array(
            'title'   => 'View Data Supplier',
            'supplier'    => $this->Supplier_model->getAll(),
            'content' => 'Supplier/index'
        );
		$this->load->view('template/main', $data);
	}
    public function add()
	{
        $data = array(
            'title'   => 'Tambah Data Supplier',
            'content' => 'Supplier/add_form'
        );
		$this->load->view('template/main', $data);
	}
    public function save()
    {
        $this->Supplier_model->Save();
        if ($this->db->affected_rows()>0) {
            $this->session->set_flashdata('success', 'Data Supplier berhasil disimpan');
        }
        redirect('Supplier');
    }
    public function getedit($id)
	{
        $data = array(
            'title'   => 'Update Data Supplier',
            'Supplier'    => $this->Supplier_model->getById($id),
            'content' => 'Supplier/edit_form'
        );
		$this->load->view('template/main', $data);
	}
    public function edit()
    {
        $this->Supplier_model->editData();
        if ($this->db->affected_rows()>0) {
            $this->session->set_flashdata('success', 'Data Supplier berhasil diupdate');
        }
        redirect('Supplier');
    }
    
    public function delete($id)
    {
        $this->Supplier_model->delete($id);
        redirect('Supplier');
    }

}
?>