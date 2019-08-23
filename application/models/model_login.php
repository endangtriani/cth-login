<?php

  /**
   *
   */
  class model_login extends CI_Model
  {

    function __construct()
    {
      // code...
      parent::__construct();
      $this->load->database();
    }

    function get_user($user)
    {
      // code...
      $cek = $this->db->get_where('login',$user);
      if ( $cek->num_rows() > 0){
        return 1;
      }else{
        return 0;
      }
    }
    function tampildata()
    {
      // code...
      $query = "SELECT * FROM login";
      return $this->db->query($query);
    }
  }

 ?>
