<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{

    protected $primary = 'id';
    protected $_table = 'kategori';
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function Save()
    {
        $data = array(
          'barcode' => htmlspecialchars($this->input->post('barcode'), true),
            'name' => htmlspecialchars($this->input->post('name'), true),
            'harga_jual' => htmlspecialchars($this->input->post('harga_jual'), true),
            'harga_beli' => htmlspecialchars($this->input->post('harga_beli'), true),
            'stok' => htmlspecialchars($this->input->post('stok'), true),
            'FKkategori_id' => htmlspecialchars($this->input->post('FKkategori_id'), true),
            'FKsatuan_id' => htmlspecialchars($this->input->post('FKsatuan_id'), true),
            'FKuser_id' => htmlspecialchars($this->input->post('FKuser_id'), true),
            'FKsuplier_id' => htmlspecialchars($this->input->post('FKsuplier_id'), true),  
        );
        return $this->db->insert($this->_table, $data);
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    public function editData()
    {
        $id = $this->input->post('id');
        $data = array(
            'barcode' => htmlspecialchars($this->input->post('barcode'), true),
            'name' => htmlspecialchars($this->input->post('name'), true),
            'harga_jual' => htmlspecialchars($this->input->post('harga_jual'), true),
            'harga_beli' => htmlspecialchars($this->input->post('harga_beli'), true),
            'stok' => htmlspecialchars($this->input->post('stok'), true),
            'FKkategori_id' => htmlspecialchars($this->input->post('FKkategori_id'), true),
            'FKsatuan_id' => htmlspecialchars($this->input->post('FKsatuan_id'), true),
            'FKuser_id' => htmlspecialchars($this->input->post('FKuser_id'), true),
            'FKsuplier_id' => htmlspecialchars($this->input->post('FKsuplier_id'), true),
        );
        return $this->db->set($data)->where($this->primary, $id)->update($this->_table);
    }
    public function delete($id)
    {
        $this->db->where('id', $id)->delete($this->_table);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data kategori berhasil dihapus');
        }
        redirect('kategori');
    }
}
