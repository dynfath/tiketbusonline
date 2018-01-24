<!DOCTYPE html>
<html>
 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Data Bis</title>

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
                <div class="col-sm-9 col-md-12 well" id="content">
                    <h2 class="my-1">TIKO BUS | Data Bus</h2>
                    <form method="post" action="<?= base_url('Admin/addBus');?>">
                    <input type="submit" name="tambah" value="+ Tambah Bus" class="btn btn-primary tambahBus" >
                    </form>
                </div>
                <br>
                <div class="col-sm-10 col-md-12 well" id="content">

                   <table class="table ">
                <thead>
                    <tr>
                        <th>Kode Bus</th>
                        <th>Nama Bus</th>
                        <th>Kapasitas</th>

                    </tr>
                </thead>
                <tbody>
                <?php foreach ($bus as $value): ?>
                    
                    <tr>
                        <td name='kdbus'><?= $value->kd_bus; ?></td>
                        <td name='nama_bus'><?= $value->nama_bus; ?></td>
                        <td name='kapasitas'><?= $value->kapasitas; ?></td>
                    
                    <td>
                            <a href="#" class="edit" data-toggle="modal">
                            <i class="fa fa-pencil editBus" aria-hidden="true" name="editBus"
                            data-kd_bus='<?= $value->kd_bus; ?>'
                            data-nama_bus='<?= $value->nama_bus; ?>'
                            data-kapasitas='<?= $value->kapasitas; ?>'> Edit</i>
                             </a>
                    </td>
                    <td>    
                            <a href="#" class="delete" data-toggle="modal">
                            <i class="fa fa-trash delbus" aria-hidden="true" name='delbus'
                            data-kdbus='<?=$value->kd_bus;?>'> Hapus</i>
                            </a>
                        </td> 
                    </tr>
                <?php endforeach ?>
                 </tbody>
                </table>
                </div>
            </div> 
        </div>   
        </div>

    <script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/jquery/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js');?>"></script>	
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/sweetalert-dev.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/sweetalert.min.css');?>"></script>
    <script>
        $(document).ready(function(){
        $(document).on('click','.delbus',function(){
            var kd_bus    = $(this).data('kdbus');
            var data = {
                'kd_bus' : kd_bus
            };

              swal({

              title: "Anda Yakin Menghapus Data Bus ini?",
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
                    url:"<?php echo base_url('Admin/hapusBus') ?>",
                    method:"POST",
                    data: data,
                    success:function(data)
                    {
                        console.log(data);
                        swal({
                                title: "Data Bus Berhasil Dihapus",
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

        $(document).on('click','.editBus',function(){
            var kd_bus   = $(this).data('kd_bus');

            var data = {
                'kd_bus' : kd_bus
            };

            console.log(data);
            $.ajax({
                    url:"<?php echo base_url('Admin/geteditbus') ?>",
                    method:"POST",
                    data: data,
                    success:function(data)
                    {
                        window.location.href ='<?=base_url('Admin/editbus') ?>';
                        console.log(data);
                }
            });
        });
         
    });
    </script>
</body>
</html>