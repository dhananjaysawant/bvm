<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller{


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

      /*******************************    Slider Information      ****************************/

    // Add Slider...
        public function slider_information(){
                $bvm_user_id = $this->session->userdata('bvm_user_id');
                $bvm_role_id = $this->session->userdata('bvm_role_id');
                if($bvm_user_id == ''){ header('location:'.base_url().'User'); }

                $this->form_validation->set_rules('slider_title', 'First Name', 'trim|required');
                if ($this->form_validation->run() != FALSE) {
                  $slider_status = $this->input->post('slider_status');
                    if(!isset($slider_status)){ $slider_status = '1'; }
                  $save_data = $_POST;
                  $save_data['slider_status'] = $slider_status;
                  $save_data['slider_addedby'] = $bvm_user_id;
                  $save_data['slider_date'] = date('d-m-Y');

                  $slider_id = $this->Master_Model->save_data('slider', $save_data);

                  if(isset($_FILES['slider_image']['name'])){
                    $time = time();
                  $image_name = 'slider_'.$slider_id.'_'.$time;
           $config['upload_path'] = 'assets/images/slider/';
           $config['allowed_types'] = 'png|jpg|jpeg';
           $config['file_name'] = $image_name;
           $filename = $_FILES['slider_image']['name'];
           $ext = pathinfo($filename, PATHINFO_EXTENSION);
           $this->upload->initialize($config);
           if ($this->upload->do_upload('slider_image')){
             $up_image = array(
               'slider_image' => $image_name.'.'.$ext,
             );
             $this->Master_Model->update_info('slider_id', $slider_id, 'slider', $up_image);
             $this->session->set_flashdata('upload_status','success');
           }
           else{
             $error = $this->upload->display_errors();
             $this->session->set_flashdata('upload_status',$this->upload->display_errors());
           }
         }

                  $this->session->set_flashdata('save_success','success');
                  header('location:'.base_url().'Master/slider_information');
        }


                $data['slider_list'] = $this->Master_Model->get_list_by_id3('','','','','','','slider_id','ASC','slider');

                $this->load->view('Include/head', $data);
                $this->load->view('Include/navbar', $data);
                $this->load->view('Master/slider_information', $data);
                $this->load->view('Include/footer', $data);
                }

                // Edit/Update Slider...
                public function edit_slider($slider_id){
                $bvm_user_id = $this->session->userdata('bvm_user_id');
                $bvm_role_id = $this->session->userdata('bvm_role_id');
                if($bvm_user_id == ''){ header('location:'.base_url().'User'); }

                $this->form_validation->set_rules('slider_title', 'First Name', 'trim|required');
                if ($this->form_validation->run() != FALSE) {
                  $slider_status = $this->input->post('slider_status');
                  if(!isset($slider_status)){ $slider_status = '1'; }
                  $update_data = array(
                      'slider_title' => $this->input->post('slider_title'),
                      'slider_image' => $this->input->post('slider_image'),
                      'slider_status' => $slider_status,
                      'slider_addedby' => $bvm_user_id,
                      'slider_date' => date('d-m-Y')
                      );
                  // $update_data = $_POST;
                  // $update_data['slider_status'] = $slider_status;
                  // $update_data['slider_addedby'] = $bvm_user_id;
                  // $update_data['slider_date'] = date('d-m-Y');
                  $this->Master_Model->update_info('slider_id', $slider_id, 'slider', $update_data);

                  if(isset($_FILES['slider_image']['name'])){
                    $time = time();
           $image_name = 'slider_'.$slider_id.'_'.$time;
           $config['upload_path'] = 'assets/images/slider/';
           $config['allowed_types'] = 'png|jpg|jpeg';
           $config['file_name'] = $image_name;
           $filename = $_FILES['slider_image']['name'];
           $ext = pathinfo($filename, PATHINFO_EXTENSION);
           $this->upload->initialize($config);
           if ($this->upload->do_upload('slider_image')){
             $up_image = array(
               'slider_image' => $image_name.'.'.$ext,
             );
             $this->Master_Model->update_info('slider_id', $slider_id, 'slider', $up_image);
             $this->session->set_flashdata('upload_status','success');
           }
           else{
             $error = $this->upload->display_errors();
             $this->session->set_flashdata('upload_status',$this->upload->display_errors());
           }
         }
                  $this->session->set_flashdata('update_success','success');
                  header('location:'.base_url().'Master/slider_information');
                }

                $slider_info = $this->Master_Model->get_info_arr('slider_id',$slider_id,'slider');
                if(!$slider_info){ header('location:'.base_url().'Master/slider_information'); }
                $data['update'] = 'update';
                $data['update_slider'] = 'update';
                $data['slider_info'] = $slider_info[0];
                $data['act_link'] = base_url().'Master/edit_slider/'.$slider_id;


                $data['slider_list'] = $this->Master_Model->get_list_by_id3('','','','','','','slider_id','ASC','slider');
                $this->load->view('Include/head', $data);
                $this->load->view('Include/navbar', $data);
                $this->load->view('Master/slider_information', $data);
                $this->load->view('Include/footer', $data);
                }

                //Delete Slider...
                public function delete_slider($slider_id){
                $bvm_user_id = $this->session->userdata('bvm_user_id');
                $bvm_role_id = $this->session->userdata('bvm_role_id');
                if($bvm_user_id == '' ){ header('location:'.base_url().'User'); }
                $this->Master_Model->delete_info('slider_id', $slider_id, 'slider');
                $this->session->set_flashdata('delete_success','success');
                header('location:'.base_url().'Master/slider_information');
                }



                /*******************************    Office Information      ****************************/

              // Add Office...
                  public function office_information(){
                          $bvm_user_id = $this->session->userdata('bvm_user_id');
                          $bvm_role_id = $this->session->userdata('bvm_role_id');
                          if($bvm_user_id == ''){ header('location:'.base_url().'User'); }

                          $this->form_validation->set_rules('office_name', 'First Name', 'trim|required');
                          if ($this->form_validation->run() != FALSE) {
                            $office_status = $this->input->post('office_status');
                              if(!isset($office_status)){ $office_status = '1'; }
                            $save_data = $_POST;
                            $save_data['office_status'] = $office_status;
                            $save_data['office_addedby'] = $bvm_user_id;
                            $save_data['office_date'] = date('d-m-Y');
                            $office_id = $this->Master_Model->save_data('office', $save_data);
                            $this->session->set_flashdata('save_success','success');
                            header('location:'.base_url().'Master/office_information');
                  }


                          $data['office_list'] = $this->Master_Model->get_list_by_id3('','','','','','','office_id','ASC','office');

                          $this->load->view('Include/head', $data);
                          $this->load->view('Include/navbar', $data);
                          $this->load->view('Master/office_information', $data);
                          $this->load->view('Include/footer', $data);
                          }

                          // Edit/Update Office...
                          public function edit_office($office_id){
                          $bvm_user_id = $this->session->userdata('bvm_user_id');
                          $bvm_role_id = $this->session->userdata('bvm_role_id');
                          if($bvm_user_id == ''){ header('location:'.base_url().'User'); }

                          $this->form_validation->set_rules('office_name', 'First Name', 'trim|required');
                          if ($this->form_validation->run() != FALSE) {
                            $office_status = $this->input->post('office_status');
                            if(!isset($office_status)){ $office_status = '1'; }

                            $update_data = $_POST;
                            $update_data['office_status'] = $office_status;
                            $update_data['office_addedby'] = $bvm_user_id;
                            $update_data['office_date'] = date('d-m-Y');
                            $this->Master_Model->update_info('office_id', $office_id, 'office', $update_data);

                            $this->session->set_flashdata('update_success','success');
                            header('location:'.base_url().'Master/office_information');
                          }

                          $office_info = $this->Master_Model->get_info_arr('office_id',$office_id,'office');
                          if(!$office_info){ header('location:'.base_url().'Master/office_information'); }
                          $data['update'] = 'update';
                          $data['update_office'] = 'update';
                          $data['office_info'] = $office_info[0];
                          $data['act_link'] = base_url().'Master/edit_office/'.$office_id;


                          $data['office_list'] = $this->Master_Model->get_list_by_id3('','','','','','','office_id','ASC','office');
                          $this->load->view('Include/head', $data);
                          $this->load->view('Include/navbar', $data);
                          $this->load->view('Master/office_information', $data);
                          $this->load->view('Include/footer', $data);
                          }

                          //Delete Office...
                          public function delete_office($office_id){
                          $bvm_user_id = $this->session->userdata('bvm_user_id');
                          $bvm_role_id = $this->session->userdata('bvm_role_id');
                          if($bvm_user_id == '' ){ header('location:'.base_url().'User'); }
                          $this->Master_Model->delete_info('office_id', $office_id, 'office');
                          $this->session->set_flashdata('delete_success','success');
                          header('location:'.base_url().'Master/office_information');
                          }

}
?>
