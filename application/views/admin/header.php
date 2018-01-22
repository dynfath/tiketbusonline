

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="<?php echo base_url('assets/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/admin/plugins/bower_components/toast-master/css/jquery.toast.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/admin/css/animate.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/admin/css/style.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/admin/css/colors/blue-dark.css');?>" id="theme" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('login/logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>  Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Left navbar-header -->
        <div class="navbar-default sidebar" style="background-color: #52527a;" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="<?=base_url('admin')?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Konfirmasi Pesanan</span></a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/Menutiket'); ?>" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Tiket</span></a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/Menubis'); ?>" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Bis</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->

