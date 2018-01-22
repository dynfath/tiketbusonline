<?php 
 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tiket Bus</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/sweetalert.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/sweetalert.min.css');?>">
  </head>

  <body>

    <!-- Navigation -->
    

    <!-- Page Content -->
    <div class="container">
    	<div class="row">
    	<div class="col-lg-9">

          <h1 class="my-4">Pesanan Tiket</h1>
          <div class="panel panel-primary">
            <div class="panel-body">
              <div><p>Pemesanan Tiket Sedang dalam Proses .
              <p> Untuk membatalkan pemesanan tiket, klik tombol Batal
              </div>
            </div>
            <!--/.panel-body-->
          </div><!--/.panel-->
         </div>
        </div>
        <!-- /.col-lg-3 -->
      <div class="row">

        

        <div class="col-lg-9">
         
          <div class="panel panel-primary">
            <div class="panel-heading" >Daftar Pesanan</div>
            <div class="panel-body">
              <table class="table">

              </table>
            </div>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/sweetalert-dev.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/sweetalert.min.css');?>"></script>

    <script>
      $(document).ready(function() {
        var id_pemesan = "<?= $login['id_pengguna']?>";
        var data = {
              id_pemesan: id_pemesan
           };
           console.log(id_pemesan);
           if (id_pemesan != "") {
              $.ajax({
                url : "<?php echo base_url('Pesanan/getUserorder') ?>",
                method : "get",
                
                data : data,
                success : function(response){
                  console.log(response.length);
                  if(response.length==0){
                    $("<tr id='daftartiket'>").append(
                    $("<td>").text('Tidak ada tiket yang dipesan'))
                    .appendTo('.table');
                  }else{  
                    $("<tr id='daftartiket'>").append(
                    $("<th>").text('Kode Pesanan'),
                    $("<th>").text('Kode Tiket'),
                    $("<th>").text('Tanggal Pemesanan'),
                    $("<th>").text('Jumlah'),
                    $("<th>").text('Total Harga')
                  ).appendTo('.table');
                  for (i = 0; i < response.length; i++) {
                    console.log(response[i]);
                        $("<tr id='daftartiket'>").append(
                        $("<td id='kd_pesan"+i+"'>").text(response[i].kd_pesan),
                        $("<td id='kd_tiket"+i+"'>").text(response[i].kd_tiket),
                        $("<td id='tanggal"+i+"'>").text(response[i].tgl_trans),
                        $("<td id='jml_tiket"+i+"'>").text(response[i].jml_tiket),
                        $("<td id='total_harga"+i+"'>").text(response[i].total_harga),
                        $("<td><input type='button' id='btnBatal_"+i+"' class='btn btn-danger btn-xs' value='Batal' onclick='batal("+i+")'> "),
                        //$("<input type='hidden' id='kd_pesan"+i+"' value='"+response[i].kd_pesan+"'>")
                        
                        ).appendTo(".table"); 
                   
                   }
                  }
                },
                error: function (err) {
                        alert(err);
                    }
            });
              
           } else {
              window.location.href = "<?php echo base_url('Login') ?>";
           }
      });

    </script>
    <script type="text/javascript">
      function batal(id) {
          swal({
                title: "Batalkan Pemesanan Tiket?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Konfirmasi",
                cancelButtonText: "Kembali",
                closeOnConfirm: false,
                closeOnCancel: true
              },
              function(isConfirm) {
                if (isConfirm) {
                  var kd_pesan = ".table #kd_pesan"+id;
            var data = {
                'kd_pesan' : $(kd_pesan).text()
                
              };
              console.log(data);
              $.ajax({
                  url:"<?php echo base_url('Pesanan/batalpesan') ?>",
                  method:"POST",
                  data: data,
                  success:function(data)
                  {
                     console.log(data);
                     
                swal({
                        title: "Pesanan Berhasil Dibatalkan",
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

                }
            });

        }
    </script>
  </body>

</html>
