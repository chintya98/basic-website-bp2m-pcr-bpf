<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class Informasi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('Informasi_model');
    $this->load->model('Kategori_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Informasi";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['informasi'] = $this->Informasi_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("admin/vw_informasi", $data);
    $this->load->view("layout/footer" , $data);
  }

  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Informasi";
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['kategori'] = $this->Kategori_model->get();

    
    $this->form_validation->set_rules('judul', 'Judul Informasi', 'required', [
      'required' => 'Judul Informasi Wajib di isi'
    ]);

    $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
      'required' => 'Kategori Wajib di isi'
    ]);

    $this->form_validation->set_rules('isi', 'Isi', 'required', [
      'required' => 'Wajib di isi'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("admin/vw_tambah_informasi", $data);
      $this->load->view("layout/footer");
    } else {
      if($this->input->post('0') !== null){
        $status = '0';
      }elseif($this->input->post('1') !== null){
        $status = '1';
      }

      $data = [
        'judul' => $this->input->post('judul'),
        'kategori' => $this->input->post('kategori'),
        'penulis' => "admin",
        'tanggal' => date('Y-m-d'),
        'isi' => $this->input->post('isi'),
        'status' => $status
      ];

      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/img/informasi/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }
      $this->Informasi_model->insert($data, $upload_image);
      $this->session->set_flashdata('message', '<div class="alert alert-success"
      role="alert">Informasi Berhasil Ditambah!</div>');
      redirect('Informasi');
    }
    
  }

  public function hapus($id)
  {
    // $data = $this->Informasi_model->getById;

        //Hapus thumbnail 
        // $thumbnail = $data->gambar;
        // $path = APPPATH.'../assets/img/informasi/'.$thumbnail;
        // unlink($path);

    $this->Informasi_model->delete($id);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Informasi Berhasil Dihapus!</div>');
    redirect('Informasi');
  }

  function edit($id)
  {
    $data['judul'] = "Halaman Edit Informasi";
    $data['informasi'] = $this->Informasi_model->getById($id);
    $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
    $data['kategori'] = $this->Kategori_model->get();
    
    $this->form_validation->set_rules('judul', 'Judul Informasi', 'required', [
      'required' => 'Judul Informasi Wajib di isi'
    ]);

    $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
      'required' => 'Kategori Wajib di isi'
    ]);

    $this->form_validation->set_rules('isi', 'Isi', 'required', [
      'required' => 'Wajib di isi'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("admin/vw_edit_informasi", $data);
      $this->load->view("layout/footer");
    } else {
      if($this->input->post('0') !== null){
        $status = '0';
    }elseif($this->input->post('1') !== null){
        $status = '1';
    }else{
        $status = $this->input->post('status');
    }

      $data = [
        'judul' => $this->input->post('judul'),
        'kategori' => $this->input->post('kategori'),
        'penulis' => "admin",
        'tanggal' => date('Y-m-d'),
        'isi' => $this->input->post('isi'),
        'status' => $status
      ];

      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/img/informasi/';
        $this->load->library('upload', $config);
      
        if ($this->upload->do_upload('gambar')) {
          $old_image = $data['informasi']['gambar'];
    
          if ($old_image != 'default.png') {
            unlink(FCPATH . 'assets/img/informasi/' . $old_image);
          }
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }

      $id = $this->input->post('id');
      $this->Informasi_model->update(['id' => $id], $data, $upload_image);
      // var_dump($data);
      // die;
      
      $this->session->set_flashdata('message', '<div class="alert alert-success"
        role="alert">Informasi Berhasil Diedit!</div>');
      redirect('Informasi');
    }
  }

}