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

class Kategori extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
	is_logged_in();
    $this->load->model('Kategori_model');
  }

  public function index()
  {
    // $data['judul'] = "Kelola Kategori";
    // $data['kategori'] = $this->Kategori_model->get();

    // $this->load->view("layout/header", $data);
    // $this->load->view("admin/vw_kategori", $data);
    // $this->load->view("layout/footer");
  }

  public function tambah()
  {
    $data['judul'] = "Kelola Kategori";
    $data['kategori'] = $this->Kategori_model->get();

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('kategori', 'Nama Kategori', 'required', [
			'required' => 'Nama kategori wajib diisi'
		]);
		
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("admin/vw_kategori", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'kategori' => $this->input->post('kategori'),
			];
			$this->Kategori_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jenis Kategori Berhasil Ditambah!</div>');
			redirect('Kategori/tambah');
		}
  }

  public function hapus($id)
	{
		$this->Kategori_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fa fa-info-circle"></i> Jenis kategori tidak dapat dihapus karena sudah berelasi! </div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fa fa-check-circle"></i> Jenis kategori Berhasil Dihapus!</div>');
		}
		redirect('Kategori/tambah');
	}

}
