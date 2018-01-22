<?php 
 ?>
<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/login.css');?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
<div class="container">
	<br>
	<br>
    <div class="form"> 
          <h1>PENDAFTARAN</h1>

      <form action="<?= base_url('login/reguser');?>" method="post" name="regpelanggan">
      <div class="field-wrap">
            <label>
              Nama Lengkap<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="nama"/>
          </div>

      <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="username"/>
          </div>

      <div class="field-wrap">
              <label>Password<span class="req">*</span></label>
            <input type="password"required autocomplete="off" name="password"/>
          </div>
          <?php if ($this->session->flashdata('result_reg')) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo validation_errors(); ?>
                <?php echo $this->session->flashdata('result_reg'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <?php } ?>
          <button type="submit" class="button button-block">DAFTAR</button>
        </form>  
    </div>
      
</div>
    
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


  </body>

</html>