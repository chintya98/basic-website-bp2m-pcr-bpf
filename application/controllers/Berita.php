<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class Berita extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('Berita_model');
    $this->load->model('Kategori_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Berita";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['berita'] = $this->Berita_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("admin/vw_berita", $data);
    $this->load->view("layout/footer" , $data);
  }

  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Berita";
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['kategori'] = $this->Kategori_model->get();

    
    $this->form_validation->set_rules('judul', 'Judul Berita', 'required', [
      'required' => 'Judul Berita Wajib di isi'
    ]);

    $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
      'required' => 'Kategori Wajib di isi'
    ]);

    $this->form_validation->set_rules('isi', 'Isi', 'required', [
      'required' => 'Wajib di isi'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("admin/vw_tambah_berita", $data);
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
        $config['upload_path'] = './assets/img/berita/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }
      $this->Berita_model->insert($data, $upload_image);
      $this->session->set_flashdata('message', '<div class="alert alert-success"
      role="alert">Berita Berhasil Ditambah!</div>');
      redirect('Berita');
    }
    
  }

  public function hapus($id)
  {
    // $data = $this->Berita_model->getById;

        //Hapus thumbnail 
        // $thumbnail = $data->gambar;
        // $path = APPPATH.'../assets/img/berita/'.$thumbnail;
        // unlink($path);

    $this->Berita_model->delete($id);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berita Berhasil Dihapus!</div>');
    redirect('Berita');
  }

  function edit($id)
  {
    $data['judul'] = "Halaman Edit Berita";
    $data['berita'] = $this->Berita_model->getById($id);
    $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
    $data['kategori'] = $this->Kategori_model->get();
    
    $this->form_validation->set_rules('judul', 'Judul Berita', 'required', [
      'required' => 'Judul Berita Wajib di isi'
    ]);

    $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
      'required' => 'Kategori Wajib di isi'
    ]);

    $this->form_validation->set_rules('isi', 'Isi', 'required', [
      'required' => 'Wajib di isi'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("admin/vw_edit_berita", $data);
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
        $config['upload_path'] = './assets/img/berita/';
        $this->load->library('upload', $config);
      
        if ($this->upload->do_upload('gambar')) {
          $old_image = $data['berita']['gambar'];
    
          if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/berita/' . $old_image);
          }
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }

      $id = $this->input->post('id');
      $this->Berita_model->update(['id' => $id], $data, $upload_image);
      // var_dump($data);
      // die;
      
      $this->session->set_flashdata('message', '<div class="alert alert-success"
        role="alert">Berita Berhasil Diedit!</div>');
      redirect('Berita');
    }
  }

}