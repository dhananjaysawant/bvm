<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Kolkata');
  }


  public function logout(){
  $this->session->sess_destroy();
  header('location:'.base_url().'User');
}

/**************************      Login      ********************************/
      public function index(){
        $bvm_user_id = $this->session->userdata('bvm_user_id');
        $bvm_company_id = $this->session->userdata('bvm_company_id');
        $bvm_role_id = $this->session->userdata('bvm_role_id');
          if($bvm_user_id == ''){
              $this->form_validation->set_rules('mobile', 'Mobile No', 'trim|required');
              $this->form_validation->set_rules('password', 'Password', 'trim|required');
              if ($this->form_validation->run() == FALSE) {
                $this->load->view('User/login');
              } else{
                $mobile = $this->input->post('mobile');
                $password = $this->input->post('password');

                $login = $this->User_Model->check_login($mobile, $password);
                // print_r($login);
                if($login == null){
                  $this->session->set_flashdata('msg','login_error');
                  header('location:'.base_url().'User');
                } else{
                  // echo 'null not';
                  $this->session->set_userdata('bvm_user_id', $login[0]['user_id']);
                  $this->session->set_userdata('bvm_role_id', $login[0]['role_id']);
                  // $this->session->set_userdata('branch_id', $login[0]['branch_id']);
                  header('location:'.base_url().'User/dashboard');
                }
              }
            }
        else{
          header('location:'.base_url().'User/dashboard');
        }
        }
      public function dashboard(){
        $bvm_user_id = $this->session->userdata('bvm_user_id');
    $bvm_company_id = $this->session->userdata('bvm_company_id');
    $bvm_role_id = $this->session->userdata('bvm_role_id');
    if($bvm_user_id == '' && $bvm_company_id == ''){ header('location:'.base_url().'User'); }
            $this->load->view('Include/head');
            $this->load->view('Include/Navbar');
          	$this->load->view('User/dashboard');
            $this->load->view('Include/footer');
      }



      /*******************************    User Information      ****************************/

  // Add User...
  public function user_information(){
    $bvm_user_id = $this->session->userdata('bvm_user_id');
    $bvm_role_id = $this->session->userdata('bvm_role_id');
    if($bvm_user_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('user_name', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $user_status = $this->input->post('user_status');
      if(!isset($user_status)){ $user_status = '1'; }
      $save_data = $_POST;
      $save_data['user_status'] = $user_status;
      $save_data['user_addedby'] = $bvm_user_id;
      $save_data['user_date'] = date('d-m-Y');
      $user_id = $this->Master_Model->save_data('user', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'User/user_information');
    }


    $data['user_list'] = $this->Master_Model->get_list_by_id3('is_admin','0','','','','','user_id','ASC','user');

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/user_information', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update User...
  public function edit_user($user_id){
    $bvm_user_id = $this->session->userdata('bvm_user_id');
    $bvm_role_id = $this->session->userdata('bvm_role_id');
    if($bvm_user_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('user_name', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $user_status = $this->input->post('user_status');
      if(!isset($user_status)){ $user_status = '1'; }
      $update_data = $_POST;
      $update_data['user_status'] = $user_status;
      $update_data['user_addedby'] = $bvm_user_id;
      $update_data['user_date'] = date('d-m-Y');
      $this->Master_Model->update_info('user_id', $user_id, 'user', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'User/user_information');
    }

    $user_info = $this->Master_Model->get_info_arr('user_id',$user_id,'user');
    if(!$user_info){ header('location:'.base_url().'User/user_information'); }
    $data['update'] = 'update';
    $data['update_user'] = 'update';
    $data['user_info'] = $user_info[0];
    $data['act_link'] = base_url().'User/edit_user/'.$user_id;


    $data['user_list'] = $this->Master_Model->get_list_by_id3('is_admin','0','','','','','user_id','ASC','user');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('User/user_information', $data);
    $this->load->view('Include/footer', $data);
  }

  //Delete User...
  public function delete_user($user_id){
    $bvm_user_id = $this->session->userdata('bvm_user_id');
    $bvm_company_id = $this->session->userdata('bvm_company_id');
    $bvm_role_id = $this->session->userdata('bvm_role_id');
    if($bvm_user_id == '' ){ header('location:'.base_url().'User'); }
    $this->Master_Model->delete_info('user_id', $user_id, 'user');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'User/user_information');
  }



  
}
?>
