<?php
class Login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('model_login');
    $this->load->model('model_welcome');
    $this->load->library('form_validation');
  }

  function index()
  {
    // code...
    $this->load->view('login_view');
  }

  function aksi_login()
  {
    // code...
    if ($this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'sudah_login');
			redirect(base_url('index.php/welcome'));

		}

    if(isset($_POST['login'])){
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $data = array(
        'username' => $username,
        'password' => md5($password)
      );

      $cek = $this->model_login->get_user($data);

      if($cek != null){
        $session = array(
          'session_id' => $cek['id_login'],
          'session_name' => $cek['nama'],
          'session_username' => $cek['username'],
        );
        $this->session->set_flashdata('alert','login_sukses');
        $this->session->set_userdata($session);

         redirect(site_url('welcome'));
      }
      else{
        $this->session->set_flashdata('alert','login_gagal');
         redirect(site_url('login'));
      }
    }
    else{
      $data = array(
        'title' => 'Login',
      );
      $this->load->view('login_view',$data);
    }


  }
}


 ?>
