<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
      public function dashboard(){
            $this->load->view('Include/head');
            $this->load->view('Include/Navbar');
          	$this->load->view('User/dashboard');
            $this->load->view('Include/footer');
      }

      public function user_information(){
            $this->load->view('Include/head');
            $this->load->view('Include/Navbar');
          	$this->load->view('User/user_information');
            $this->load->view('Include/footer');
      }
      
}
?>
