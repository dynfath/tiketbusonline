
<!DOCTYPE html>
<html>
 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Data Tiket</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/css/bootstrap-datetimepicker.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/css/bootstrap-datetimepicker.min.css'); ?>">
    
    <!-- Custom styles for this template -->
    <link href="assets/css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/sweetalert.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/sweetalert.min.css');?>">
  </head>


<body>
<!-- Page Content -->
<br>
<br>
<br>
        <div id="page-wrapper">
        <div class="container-fluid">
        

                <form class="form" role="form" method="post" action="<?= base_url('Admin/tambahbus');?>">
                    <form class="form-horizontal" role="form" >
                <h2 align="center">Tambah Bus</h2>


                <div class="form-group" role="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Kode Bus</label>
                    <div class="col-sm-9">
                        <input type="text" id='kd_bus' name='kd_bus' class="form-control" autofocus placeholder="Kode Bus">
                    </div>
                </div>

                <div class="form-group" role="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Nama Bus</label>
                    <div class="col-sm-9">
                        <input type="text" id='nama_bus' name='nama_bus' class="form-control" autofocus placeholder="Nama Bus" >
                    </div>
                </div>

                <div class="form-group" role="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Kapasitas</label>
                    <div class="col-sm-9">
                        <input type="text" id='kapasitas' name='kapasitas' class="form-control" autofocus placeholder="kapasitas" >
                    </div>
                </div>


                <div class="form-group" role="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" class="btn btn-primary btn-block btn-update" value="Tambahkan" name="submit">
                    </div>
                </div>
            </form> <!-- /form -->
                    
                </form>

        </div>   
        </div>
    <script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/jquery/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/sweetalert-dev.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/sweetalert.min.css');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap-datetimepicker.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap-datetimepicker.min.js') ?>"></script>
    
</body>
</html>