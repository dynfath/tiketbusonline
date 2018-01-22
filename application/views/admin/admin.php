
<!DOCTYPE html>
<html>
 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/sweetalert.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/sweetalert.min.css');?>" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="assets/css/shop-homepage.css" rel="stylesheet">

  </head>


<body>
<!-- Page Content -->
            <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                
                <div class="col-sm-12 col-md-12 well" id="content">

                   <table class="table">

                    <tr>
                        <th>Kode Pesan</th>
                        <th>ID Pemesan</th>
                        <th>Kode Tiket</th>
                        <th>Tanggal</th>
                        <th>Jumlah Tiket</th>
                        <th>Total Harga</th>
                    </tr>

                <?php foreach ($pemesanan as $pesanan): ?>
                    
                    <tr>
                        <td><?= $pesanan->kd_pesan ?></td>
                        <td><?= $pesanan->id_pemesan ?></td>
                        <td><?= $pesanan->kd_tiket ?></td>
                        <td><?= $pesanan->tgl_trans ?></td>
                        <td><?= $pesanan->jml_tiket ?></td>
                        <td><?= $pesanan->total_harga ?></td>
                        <td>
                            <input type="button" name="" class="btn btn-primary btnConfirm" value="Konfirmasi"
                            data-kd_pesan='<?= $pesanan->kd_pesan ?>'>
                        </td>
                    </tr>


                <?php endforeach ?>

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->

    <script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/jquery/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js');?>"></script>   
    <script src="<?php echo base_url('assets/bootstrap/sweetalert-dev.js');?>"></script>   
    <script src="<?php echo base_url('assets/bootstrap/sweetalert.min.js');?>"></script>   
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('click','.btnConfirm',function(){
                var kd_pesan = $(this).data('kd_pesan');

                var data = {
                    'kd_pesan' : kd_pesan
                };

                swal({
                  title: "Apakah Anda Yakin akan Mengkonfirmasi Tiket?",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-success",
                  confirmButtonText: "Konfirmasi",
                  cancelButtonText: "Batal",
                  closeOnConfirm: false,
                  closeOnCancel: true
            },
                function(isConfirm) {
                    if (isConfirm) {

                        $.ajax({
                        url:"<?php echo base_url('Admin/konfirmasi') ?>",
                        method:"POST",
                        data: data,
                        success:function(response)
                        {
                            console.log(response);
                            swal({
                                    title: "Tiket Berhasil Di Konfirmasi",
                                    type: "success",
                                },
                                function(){
                                    window.location.href = "<?php echo base_url('Admin') ?>";
                                });
                       
                            },
                            error: function (err) {
                                alert(err);
                            }
                        });

                    }else{
                        return true;
                    }
                });

            });
        });

    </script>


</body>
</html>


