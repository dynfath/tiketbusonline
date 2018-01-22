
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
        <div class="row" id="main" >
                <div>
                    <input type="button" name="" value="+ Tambah Tiket" class="btn btn-primary tambahTiket">
                </div>
                <br>
                <div class="col-sm-12 col-md-12 well" id="content">

                   <table class="table ">
                <thead>
                    <tr>
                        <th>Kode Tiket</th>
                        <th>Kode Bus</th>
                        <th>Asal</th>
                        <th>Tujuan</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Harga</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($tiket as $value): ?>
                    
                    <tr>
                        <td name='kode_tiket'><?= $value['kd_tiket'] ?></td>
                        <td name='kode_bus'><?= $value['kd_bus'] ?></td>
                        <td name='asal'><?= $value['asal_kota'] ?></td>
                        <td name='tujuan'><?= $value['tujuan_kota'] ?></td>
                        <td name='tgl'><?= $value['tgl'] ?></td>
                        <td name='jam'><?= $value['jam'] ?></td>
                        <td name='harga'><?= $value['harga'] ?></td>
                        <td name='sisa_tiket'><?= $value['sisa_tiket'] ?></td>
                        <input type="hidden" name="" value="<?=$value['asal'] ?>">
                        <input type="hidden" name="" value="<?=$value['tujuan'] ?>">
                        <td>
                            <a href="#" class="edit" data-toggle="modal">
                                <i class="fa fa-pencil editTiket" aria-hidden="true" name="editTiket"
                                data-kodetiket='<?= $value['kd_tiket'] ?>'
                                data-kodebus='<?= $value['kd_bus'] ?>'
                                data-asal='<?= $value['asal'] ?>'
                                data-tujuan='<?= $value['tujuan'] ?>'
                                data-tgl='<?= $value['tgl'] ?>'
                                data-jam='<?= $value['jam'] ?>'
                                data-harga='<?= $value['harga']  ?>'
                                data-sisatiket='<?= $value['sisa_tiket']  ?>'></i>
                            </a>
                            <a href="#" class="delete" data-toggle="modal">
                                <i class="fa fa-trash hapusTiket" aria-hidden="true" name='hapusTiket'
                                data-kodetiket='<?= $value['kd_tiket'] ?>'></i>
                            </a>
                        </td>
                    </tr>


                <?php endforeach ?>
                </div>
            </div> 
        </div>   
        </div>
    <script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/jquery/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/sweetalert-dev.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/sweetalert.min.css');?>"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click','.hapusTiket',function(){
            var kd_tiket    = $(this).data('kodetiket');
            var data = {
                'kd_tiket' : kd_tiket
            };

        swal({

              title: "Anda Yakin Menghapus Data Tiket?",
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Konfirmasi",
              cancelButtonText: "Batal",
              closeOnConfirm: false,
              closeOnCancel: true
        },
            function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url:"<?php echo base_url('Admin/hapusTiket') ?>",
                    method:"POST",
                    data: data,
                    success:function(data)
                    {
                        console.log(data);
                        swal({
                                title: "Tiket Berhasil Dihapus",
                                type: "success",
                            },
                            function(){
                                location.reload();
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

        $(document).on('click','.editTiket',function(){
            var kode_tiket    = $(this).data('kodetiket');
            var kode_bus    = $(this).data('kodebus');
            var asal    = $(this).data('asal');
            var tujuan    = $(this).data('tujuan');
            var tgl    = $(this).data('tgl');
            var jam    = $(this).data('jam');
            var harga    = $(this).data('harga');
            var sisa_tiket    = $(this).data('sisa_tiket');
                        

            var data = {
                'kodetiket' : kode_tiket,
                'kodebus' : kode_bus,
                'asal' : asal,
                'tujuan' : tujuan,
                'tgl' : tgl,
                'jam' : jam,
                'harga' : harga,
                'sisa_tiket' : sisa_tiket
            };


            console.log(data);
            $.ajax({
                    url:"<?php echo base_url('Admin/editDataTiket') ?>",
                    method:"POST",
                    data: data,
                    success:function(data)
                    {
                        window.location.href ='<?=base_url('Admin/edittiket') ?>';
                        
                }
            });

        });

        /*$(document).on('click','.tambahTiket',function(){
            window.location.href = "<?php echo base_url('Admin/addTiket') ?>";  
        });*/

         
    });
</script>	

</body>
</html>