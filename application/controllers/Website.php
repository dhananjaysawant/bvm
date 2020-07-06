<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	public function index()
	{
		$this->load->view('Website/header');
		$this->load->view('Website/index');
		$this->load->view('Website/footer');
	}

	public function about(){
		$this->load->view('Website/header');
		$this->load->view('Website/about');
		$this->load->view('Website/footer');
	}

	public function history(){
		$this->load->view('Website/header');
		$this->load->view('Website/history');
		$this->load->view('Website/footer');
	}
	public function ethics(){
		$this->load->view('Website/header');
		$this->load->view('Website/ethics');
		$this->load->view('Website/footer');
	}
	public function structure(){
		$this->load->view('Website/header');
		$this->load->view('Website/structure');
		$this->load->view('Website/footer');
	}
	public function foundation(){
		$this->load->view('Website/header');
		$this->load->view('Website/foundation');
		$this->load->view('Website/footer');
	}
	public function objectives(){
		$this->load->view('Website/header');
		$this->load->view('Website/objectives');
		$this->load->view('Website/footer');
	}

	public function pledge(){
		$this->load->view('Website/header');
		$this->load->view('Website/pledge');
		$this->load->view('Website/footer');
	}
	public function commitee(){
		$this->load->view('Website/header');
		$this->load->view('Website/commitee');
		$this->load->view('Website/footer');
	}
	public function leadership(){
		$this->load->view('Website/header');
		$this->load->view('Website/leadership');
		$this->load->view('Website/footer');
	}
	public function gallery(){
		$this->load->view('Website/header');
		$this->load->view('Website/gallery');
		$this->load->view('Website/footer');
	}
	public function join(){
		$this->load->view('Website/header');
		$this->load->view('Website/join');
		$this->load->view('Website/footer');
	}
	public function offices(){
		$this->load->view('Website/header');
		$this->load->view('Website/offices');
		$this->load->view('Website/footer');
	}
	public function contact(){
		$this->load->view('Website/header');
		$this->load->view('Website/contact');
		$this->load->view('Website/footer');
	}
	public function carrer(){
		$this->load->view('Website/header');
		$this->load->view('Website/carrer');
		$this->load->view('Website/footer');
	}

	public function news_list(){
		$this->load->view('Website/header');
		$this->load->view('Website/news_list');
		$this->load->view('Website/footer');
	}

	public function detail_news(){
		$this->load->view('Website/header');
		$this->load->view('Website/detail_news');
		$this->load->view('Website/footer');
	}




}

?>
