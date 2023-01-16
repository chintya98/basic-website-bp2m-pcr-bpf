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

class Pertanyaan extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
	is_logged_in();
    $this->load->model('Pertanyaan_model');
  }

  public function index()
  {
    $data['judul'] = "Kelola Pesan Masuk";
    $data['pertanyaan'] = $this->Pertanyaan_model->get();

    $this->load->view("layout/header", $data);
    $this->load->view("admin/vw_pesan", $data);
    $this->load->view("layout/footer");
  }

  public function detail($id){
    $data['judul'] = "Detail Pesan";
    $data['pertanyaan'] = $this->Pertanyaan_model->getById($id);

    $this->load->view("layout/header", $data);
    $this->load->view("admin/vw_pesan_detail", $data);
    $this->load->view("layout/footer");
  }

  public function hapus($id)
	{
		$this->Pertanyaan_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fa fa-check-circle"></i> Pesan Berhasil Dihapus!</div>');
		
		redirect('Pertanyaan');
	}

}
