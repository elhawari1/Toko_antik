<?php

class Model_kategori extends CI_Model
{
    public function data_meja()
    {
        return $this->db->get_where("tbl_barang",array('kategori' => 'meja'));
    }

    public function data_gucci()
    {
        return $this->db->get_where("tbl_barang",array('kategori' => 'gucci'));
    }

    public function data_patung()
    {
        return $this->db->get_where("tbl_barang",array('kategori' => 'patung'));
    }

    public function data_teko()
    {
        return $this->db->get_where("tbl_barang",array('kategori' => 'teko'));
    }

    public function data_kursi()
    {
        return $this->db->get_where("tbl_barang",array('kategori' => 'kursi'));
    }
}
?>