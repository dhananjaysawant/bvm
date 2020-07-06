<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller{

      public function slider_information(){
            $this->load->view('Include/head');
            $this->load->view('Include/Navbar');
          	$this->load->view('Master/slider_information');
            $this->load->view('Include/footer');
      }

      public function event_information(){
            $this->load->view('Include/head');
            $this->load->view('Include/Navbar');
          	$this->load->view('Master/event_information');
            $this->load->view('Include/footer');
      }
      public function carrer_information(){
            $this->load->view('Include/head');
            $this->load->view('Include/Navbar');
          	$this->load->view('Master/carrer_information');
            $this->load->view('Include/footer');
      }

      public function office_information(){
            $this->load->view('Include/head');
            $this->load->view('Include/Navbar');
          	$this->load->view('Master/office_information');
            $this->load->view('Include/footer');
      }

      public function gallery_information(){
            $this->load->view('Include/head');
            $this->load->view('Include/Navbar');
          	$this->load->view('Master/gallery_information');
            $this->load->view('Include/footer');
      }

      public function press_information(){
            $this->load->view('Include/head');
            $this->load->view('Include/Navbar');
          	$this->load->view('Master/press_information');
            $this->load->view('Include/footer');
      }
      
}
?>
