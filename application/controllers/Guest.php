<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Berita
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Guest extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Berita_model');
		$this->load->model('Informasi_model');
    $this->load->model('Kategori_model');
  }

  public function index()
  {
		$data['newberita'] = $this->Berita_model->get_new()->result();
		$data['newinformasi'] = $this->Informasi_model->get_new()->result();
    $data['topPenelitian'] = $this->Berita_model->get_topPenelitian()->result();
    $data['topPengabdian'] = $this->Berita_model->get_topPengabdian()->result();
    $data['ka'] = $this->Kategori_model->get();
    $this->load->view("guest/header", $data);
    $this->load->view("guest/beranda", $data);
    $this->load->view("guest/footer", $data);
  }

  public function profil()
  {
    $data['judul'] = "BP2M PCR";
    $this->load->view("guest/header", $data);
    $this->load->view("guest/profil", $data);
    $this->load->view("guest/footer", $data);
  }

  public function penelitian()
  {
		$data['berita'] = $this->Berita_model->get_beritaPenelitian()->result();
		$data['informasi'] = $this->Informasi_model->get_informasiPenelitian()->result();
    $this->load->view("guest/header", $data);
    $this->load->view("guest/penelitian", $data);
    $this->load->view("guest/footer", $data);
  }

  public function pengabdian()
  {
		$data['berita'] = $this->Berita_model->get_beritaPengabdian()->result();
		$data['informasi'] = $this->Informasi_model->get_informasiPengabdian()->result();
    $this->load->view("guest/header", $data);
    $this->load->view("guest/pengabdian", $data);
    $this->load->view("guest/footer", $data);
  }

  public function jurnalpcr()
  {
    $data['judul'] = "Jurnal PCR";
    $this->load->view("guest/header", $data);
    $this->load->view("guest/jurnalpcr", $data);
    $this->load->view("guest/footer", $data);
  }

  public function referensijurnal()
  {
    $data['judul'] = "Jurnal PCR";
    $this->load->view("guest/header", $data);
    $this->load->view("guest/referensijurnal", $data);
    $this->load->view("guest/footer", $data);
  }

  public function dokumen()
  {
    $this->load->model('Dokumen_model');
    $data['judul'] = "Jurnal PCR";
    $data['dokumen'] = $this->Dokumen_model->get();
    $this->load->view("guest/header", $data);
    $this->load->view("guest/dokumen", $data);
    $this->load->view("guest/footer", $data);
  }

  public function sentrahki()
  {
    $data['judul'] = "HKI PCR";
    $this->load->view("guest/header", $data);
    $this->load->view("guest/sentrahki", $data);
    $this->load->view("guest/footer", $data);
  }

  public function pertanyaan()
  {
    $data['judul'] = "Ajukan Pertanyaan";
    $this->load->model('Pertanyaan_model');

    $this->form_validation->set_rules('nama', 'Nama Pengirim', 'required', [
      'required' => 'Nama Pengirim Wajib di isi'
    ]);

    $this->form_validation->set_rules('email', 'Email', 'required', [
      'required' => 'Email Wajib di isi'
    ]);

    $this->form_validation->set_rules('subjek', 'Subjek', 'required', [
      'required' => 'Subjek Wajib di isi'
    ]);

    $this->form_validation->set_rules('isi', 'Isi Pesan', 'required', [
      'required' => 'Isi Pesan Wajib di isi'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view("guest/header", $data);
      $this->load->view("guest/pertanyaan");
      $this->load->view("guest/footer");
    } else {

      $data = [
        'pengirim' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'subjek' => $this->input->post('subjek'),
        'isi' => $this->input->post('isi'),
        'tanggal' => date('Y-m-d')
      ];

      $this->Pertanyaan_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesan berhasil dikirim!</div>');
      redirect('Guest/pertanyaan');
    }
  }

  public function detailB($id)
  {
		$data['isi'] = $this->Berita_model->getById($id);
    // $data['isi2'] = $this->Informasi_model->getById($id);
		
    $this->load->view("guest/header", $data);
    $this->load->view("guest/detailB", $data);
    $this->load->view("guest/footer");
  }
  
  public function detailI($id)
  {
		// $data['isi'] = $this->Berita_model->getById($id);
    $data['isi'] = $this->Informasi_model->getById($id);
		
    $this->load->view("guest/header", $data);
    $this->load->view("guest/detailI", $data);
    $this->load->view("guest/footer");
  }

}


/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */