<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model', 'userrole');
  }

  public function index()
  {
    if ($this->session->userdata('username')) {
      redirect('Berita');
    }
    
    $this->form_validation->set_rules('username', 'Username', 'trim|required', [
    //   'valid_username' => 'Username Harus Valid',
      'required' => 'Email Wajib di isi'
    ]);
    
    $this->form_validation->set_rules('password', 'Password', 'trim|required', [
      'required' => 'Password Wajib di isi'
    ]);
      
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/auth_header");
      $this->load->view("auth/login");
      $this->load->view("layout/auth_footer");
    } else {
      $this->cek_login();
    }
  }

  public function registrasi()
  {
    
      
    $this->form_validation->set_rules('username', 'username', 'required|trim');
    
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'is_unique' => 'Email ini sudah terdaftar!',
      'valid_email' => 'Email Harus Valid',
      'required' => 'Email Wajib di isi'
    ]);
      
    $this->form_validation->set_rules(
      'password1',
      'Password',
      'required|trim|min_length[5]|matches[password2]',
      ['matches' => 'Password Tidak Sama',
      'min_length' => 'Password Terlalu Pendek',
      'required' => 'Password harus diisi'
      ]
    );
    
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

    if ($this->form_validation->run() == false) {
        $data['judul'] = "Halaman Registrasi User";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['user'] = $this->userrole->get();
    $this->load->view("layout/header", $data);
    $this->load->view("auth/registrasi", $data);
    $this->load->view("layout/footer" , $data);

    } else {
      $data = [
      'username' => $this->input->post('username'),
      'email' => $this->input->post('email'),
      'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
      'gambar' => 'default.png',
      'role' => "author",
      'date_created' => date('Y-m-d')
      ];
      
      $this->userrole->insert($data);
      
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat!
        Akunmu telah berhasil terdaftar, Silahkan Login! </div>');
      redirect('auth/registrasi');
    }
  }

//   public function cek_regis()
//   {
//     $data = [
//       'usernama' => htmlspecialchars($this->input->post('username', true)),
//       'email' => htmlspecialchars($this->input->post('email', true)),
//       'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
//       'gambar' => 'default.png',
//       'role' => "User",
//       'date_created' => time(),
//     ];
//     $this->userrole->insert($data);
//     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
//     Selamat akun Anda telah berhasil terdaftar, Silahkan Login!</div>');
//     redirect('Auth/regis');
//   }

  public function cek_login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $user = $this->db->get_where('user', ['username' => $username])->row_array();
    if($user){
      if(password_verify($password, $user['password'])){
        $data = [
          'username' => $user['username'],
          'role' => $user['role'],
          'id' => $user['id'],
        ];
        $this->session->set_userdata($data);
        if($user['role'] == 'admin'){
          redirect('dashboard');
        }else{
          redirect('guest');
        }
      }else{
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
        redirect('Auth');
      }
    }else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Belum Terdaftar!</div>');
      redirect('Auth');
    }
  }

  public function logout() 
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('role');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
    redirect('Auth');
  }

  public function hapus($id)
  {  
    $this->userrole->delete($id);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Akun Berhasil Dihapus!</div>');
    redirect('auth/registrasi');
  }
}