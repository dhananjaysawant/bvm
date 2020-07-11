<?php
  $bvm_user_id = $this->session->userdata('bvm_user_id');
  $bvm_role_id = $this->session->userdata('bvm_role_id');
  $user_info = $this->Master_Model->get_info_arr_fields('user_name','user_id', $bvm_user_id, 'user');
?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>User/logout">
        <i class="fas fa-sign-out-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">BVM</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $user_info[0]['user_name']; ?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>User/dashboard" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Master Information
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">

            <li class="nav-item">
              <a <?php if(isset($update_user)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>User/user_information" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>User Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a <?php if(isset($update_slider)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/slider_information" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Slider Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a <?php if(isset($update_event)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/event_information" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Events Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a <?php if(isset($update_carrer)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/carrer_information" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Carrer Guidance</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_office)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/office_information" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Office Information</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_press)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/press_information" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Press Release</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_gallery)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/gallery_information" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Gallery </p>
              </a>
            </li>

          </ul>
        </li>


        <li class="nav-item">
          <a <?php if(isset($update_download_content)){ echo 'href="'.$act_link.'"'; } else{ echo 'href="'.base_url().'Master/download_content"'; } ?> class="nav-link">
            <i class="nav-icon fas fa-download"></i>
            <p>Download Content</p>
          </a>
        </li>


      </nav>
    <!-- /.sidebar-menu -->
    </div>
  <!-- /.sidebar -->
  </aside>
