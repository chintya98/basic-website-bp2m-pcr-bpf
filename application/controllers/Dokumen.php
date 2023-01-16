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

class Dokumen extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
	is_logged_in();
    $this->load->model('Dokumen_model');
  }

  public function index()
  {
    $data['judul'] = "Kelola Dokumen";
    $data['dokumen'] = $this->Dokumen_model->get();

    $this->load->view("layout/header", $data);
    $this->load->view("admin/vw_dokumen", $data);
    $this->load->view("layout/footer");
  }

  public function tambah(){
    $data['judul'] = "Halaman Tambah Dokumen";
    $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
    $data['dokumen'] = $this->Dokumen_model->get();

    
    $this->form_validation->set_rules('judul', 'Judul Dokumen', 'required', [
      'required' => 'Judul Dokumen Wajib di isi'
    ]);

    // $this->form_validation->set_rules('detail', 'Detail', 'required', [
    //   'required' => 'Detail dokumen Wajib di isi'
    // ]);


    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("admin/vw_tambah_dokumen", $data);
      $this->load->view("layout/footer");
    } else {

      $data = [
        'judul' => $this->input->post('judul'),
        'detail' => $this->input->post('detail'),
        'tanggal' => date('Y-m-d')
      ];

      $upload_file = $_FILES['file']['name'];
      if ($upload_file) {
        $config['allowed_types'] = 'pdf|docx';
        $config['upload_path'] = './assets/img/dokumen/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
          $new_file = $this->upload->data('file_name');
          $this->db->set('file', $new_file);
        } else {
          echo $this->upload->display_errors();
        }
      }
      $this->Dokumen_model->insert($data, $upload_file);
      $this->session->set_flashdata('message', '<div class="alert alert-success"
      role="alert">Dokumen Berhasil Ditambah!</div>');
      redirect('Dokumen');
    }
  }

  public function hapus($id)
	{
		$this->Dokumen_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fa fa-check-circle"></i> Dokumen Berhasil Dihapus!</div>');
		
		redirect('Dokumen');
	}

}
