<?php

class Kategori extends CI_Controller
{
    public function meja()
    {
        $data['meja'] = $this->model_kategori->data_meja()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('meja',$data);
        $this->load->view('templates/footer');

    }

    public function gucci()
    {
        $data['gucci'] = $this->model_kategori->data_gucci()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('gucci',$data);
        $this->load->view('templates/footer');

    }

    public function patung()
    {
        $data['patung'] = $this->model_kategori->data_patung()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('patung',$data);
        $this->load->view('templates/footer');

    }
    public function teko()
    {
        $data['teko'] = $this->model_kategori->data_teko()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('teko',$data);
        $this->load->view('templates/footer');

    }

    public function kursi()
    {
        $data['kursi'] = $this->model_kategori->data_kursi()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kursi',$data);
        $this->load->view('templates/footer');

    }
}
?>