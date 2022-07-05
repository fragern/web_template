<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url() ?>assets/dist/img/Logo Denso DMIA.png" alt="AdminLTE Logo"  
           style="opacity: .8">
      <span class="brand-text font-weight-light" > </span>      
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
        
        <div class="image">
          <img src="<?php echo base_url() ?>assets/foto/login1.jpg" class="img-circle elevation-3" alt="User Image"  />   
        </div>

        <!-- Menampilkan foto -->
        <div class="image">

           <?php   

             if($this->session->userdata('authenticated')){ 

              // $data = base64_encode($this->session->userdata('ImageData'))    ;    
              // echo '<img src="data:image/gif;base64,' . $data . '" class="img-circle elevation-3" alt="User Image"  />';
            
             } else{
              
              // echo '<img src="assets/foto/login1.jpg" class="img-circle elevation-3" alt="User Image"  />';
   
             }
             
          ?>     

        </div>

        <div class="info">
              
             <a href="#" class="d-block">
             <?php 
             if($this->session->userdata('authenticated')){ 
                echo $this->session->userdata('nama'); 
                                
              }else{

                echo 'Anonymous';
              }             
             
             ?>
             </a>   
             <!-- email -->
             <a href="#" class="d-block">
             <?php 
             if($this->session->userdata('authenticated')){ 
                // echo '( '.$this->session->userdata('rolename').' )';    
                // echo '( '.$this->session->userdata('WT202105007').' )';    
                echo '( '.$this->session->userdata('WT202105007Add').' )';   
                                                        
              }else{

                echo '';
              }             
             
             ?>
             </a>  
                                               
        </div>
      
      </div>
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <!-- nav-pills -->
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Add icons to the links using the .nav-icon class  with font-awesome or any other icon font library -->
         
          <?php if($this->session->userdata('rolename')=='Administrator' ||  $this->session->userdata('rolename')=='Administrator' ){ ?>   
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('C_karyawan') ?>" class="nav-link">              
              <i class="nav-icon fa fa-home"></i>
              <p>Karyawan</p>
            </a>   
          </li>
          <?php } ?>

          <!-- User Setting -->           
          <li class="nav-item has-treeview">

            <?php if($this->session->userdata('rolename')=='Administrator' ||  $this->session->userdata('rolename')=='Administrator' ){ ?>  
            <a href="#" class="nav-link">
              <i class="nav-icon fa  fa-user-cog"></i>
                <p>
                  User Setting
                  <i class="fas fa-angle-left right"></i>
                </p>
            </a> 
            <?php } ?>

            <!-- UL User Setting -->   
            <ul class="nav nav-treeview">
            
              <!-- Role  -->
              <?php  if($this->session->userdata('rolename')=='Administrator' || $this->session->userdata('MN202103011') ){ ?>                
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>C_Role" class="nav-link">
                    <i class="nav-icon fa fa-user-cog"></i>
                    <p>Role</p>
                  </a>
                </li>
              <?php } ?>

                <!-- User Access -->              
                <?php if($this->session->userdata('rolename')=='Administrator' ||  $this->session->userdata('MN202103010') ){ ?>                   
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>C_Role_Access" class="nav-link">
                      <i class="nav-icon fa fa-user-cog"></i>
                      <p>Role Access</p>
                  </a>
                </li>
              <?php } ?>

              <!-- User  -->          
              <?php if($this->session->userdata('rolename')=='Administrator' ||  $this->session->userdata('MN202103009') ){ ?>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>C_User" class="nav-link">
                      <i class="nav-icon fas fa-user"></i>
                      <p>User System</p>
                    </a>
                </li>
              <?php } ?>

            </ul>     
            <!-- /UL User Setting -->   

          </li>
          <!-- /User Setting -->   
          
          <!-- System Setting  -->
          <li class="nav-item has-treeview">
            
              <!-- <php if($this->session->userdata('role_id')=='RL202104002' ){ ?> -->

                <a href="#" class="nav-link">
                  <i class="nav-icon fas  fa-tools"></i>
                  <p>
                  System Setting
                  <i class="fas fa-angle-left right"></i>
                  </p>
                </a> 

              <!-- <php } ?> -->
              
            <!-- UL Menu Setting  -->
            <ul class="nav nav-treeview">

              <?php if($this->session->userdata('rolename')=='Administrator' || $this->session->userdata('MN202103012') ){ ?>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>C_Menu" class="nav-link">
                    <i class="nav-icon fas fa-chevron-circle-down"></i>
                    <p>
                      Menu Setting
                    </p>
                  </a>      
                </li>
              <?php } ?>

              <?php if($this->session->userdata('rolename')=='Administrator' ||  $this->session->userdata('WT202105007') ){ ?>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>C_Department" class="nav-link">
                  <i class="nav-icon fas fa-building"></i>
                    <p>
                    Department
                    </p>
                  </a>      
                </li>
              <?php } ?>

            </ul>
            <!-- /UL Menu Setting  -->
        
          </li>
          <!-- /System Setting  -->

          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('Auth/logout') ?>" class="nav-link">
              <i class="nav-icon fa fa-power-off text-danger"></i>
              <p>
                Logout               
              </p>
            </a>            
          </li>

        </ul>
        <!-- /nav-pills -->
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>