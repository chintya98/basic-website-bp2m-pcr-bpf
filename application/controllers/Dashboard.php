<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('Berita_model');
    $this->load->model('Informasi_model');
    $this->load->model('Kategori_model');
    $this->load->model('Pertanyaan_model');
    $this->load->model('User_model');
    $this->load->model('Dokumen_model');
  }

  function index()
  {
    $data['judul'] = "Halaman Dashboard";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['berita'] = $this->Berita_model->tberita();
    $data['informasi'] = $this->Informasi_model->tinfo();
    $data['dokumen'] = $this->Dokumen_model->tdok();
    $data['pesan'] = $this->Pertanyaan_model->tpesan();
    $data['us'] = $this->User_model->tuser();
    $this->load->view("layout/header", $data);
    $this->load->view("admin/vw_dashboard", $data);
    $this->load->view("layout/footer");
  }
}