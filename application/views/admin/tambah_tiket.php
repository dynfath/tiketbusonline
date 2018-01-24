
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
        

                <form class="form" role="form" method="post" action="<?= base_url('Admin/tambahTiket');?>">
                    <form class="form-horizontal" role="form" >
                <h2 align="center">Tambah Tiket</h2>
                <div class="form-group" role="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Kode Tiket</label>
                    <div class="col-sm-9">
                        
                        
                        <input type="text" id='kd_tiket' name="kd_tiket" placeholder="Kode Tiket" class="form-control" autofocus>

                    </div>
                </div>

                <div class="form-group" role="form-group">
                    <label for="country" class="col-sm-3 control-label">Kode Bus</label>
                    <div class="col-sm-9">
                        <select name="kd_bus" class="form-control">
                             <?php foreach ($bus as $value): ?>                            
                                <option value="<?=$value->kd_bus ?>"><?= $value->kd_bus ?></option>
                            <?php endforeach ?>

                        </select>
                    </div>
                </div> <!-- /.form-group -->

                <div class="form-group" role="form-group">
                    <label for="country" class="col-sm-3 control-label">Asal</label>
                    <div class="col-sm-9">
                        <select name="asal" class="form-control">
                            <?php foreach ($kota as $value): ?>                            
                                <option value="<?=$value->id_kota ?>"><?= $value->nama_kota ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div> <!-- /.form-group -->

                <div class="form-group" role="form-group">
                    <label for="country" class="col-sm-3 control-label">Tujuan</label>
                    <div class="col-sm-9">
                         <select name="tujuan" class="form-control">
                            <?php foreach ($kota as $value): ?>                            
                                <option value="<?=$value->id_kota ?>"><?= $value->nama_kota ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div> <!-- /.form-group -->

                <div class="form-group" role="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Tanggal</label>
                    <div class="col-sm-9">

                        <input type="text" id='tgl' name="tgl" class="form-control" placeholder='yyyy-mm-dd' id='tgl'>

                    </div>
                </div>

                <div class="form-group" role="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Jam Berangkat</label>
                    <div class="col-sm-9">

                        
                        <input type="text" id='jam' name="jam" class="form-control date" placeholder='hh:mm:ss' id='jam'>

                    </div>
                </div>



                <div class="form-group" role="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Harga</label>
                    <div class="col-sm-9">
 
                        
                        <input type="text" id='harga' name='harga'  class="form-control" autofocus >

                    </div>
                </div>

                <div class="form-group" role="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Stok</label>
                    <div class="col-sm-9">

                        <input type="text" id='sisa_tiket' name='sisa_tiket' class="form-control" autofocus >

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
    <script type="text/javascript">
    $(function(){
    $('#tgl').datetimepicker({
            format: 'yyyy-mm-dd',
            allowInputToggle: true
        });
    });
      $(function(){
    $('#jam').datetimepicker({
            pickDate: false,
            format:'hh:ii:00',
            allowInputToggle: true
        });
    });
    </script>
</body>
</html>