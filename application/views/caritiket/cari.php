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

      

        

          <div class="panel panel-primary">
            <div class="panel-heading">Cari Tiket</div>
            <div class="panel-body">

              <form method="get" id="formcari" action="<?= base_url('Cari/caritiket');?>">
                <div class="row">
                  <div class="col-sm-5">               
                  <div class="form-group">
                    <label for="sel1">Asal Kota : </label>
                    <select class="form-control required" title='Kota Asal tidak boleh kosong' name="asal" id="asal">
                        <?php foreach ($kota as $ka) { ?>
                          <option value="<?= $ka['nama_kota']; ?>" ><?= $ka['nama_kota']; ?></option>
                        <?php } ?>
                        
                    </select>
                  </div> 
                </div>
                  <div class="col-sm-5"> 
                  <div class="form-group">
                    <label for="sel2">Tujuan : </label>
                    <select class="form-control required" title='Kota Tujuan tidak boleh kosong' name="tujuan" id="tujuan">
                        <?php foreach ($kota as $kt) { ?>
                          <option value="<?= $kt['nama_kota']; ?>"><?= $kt['nama_kota']; ?></option>
                        <?php } ?> 
                    </select>
                    
                  </div>
                  </div>

                  </div>          
                 <input value="Cari" class="btn btn-primary" type="submit" id="btncari"/>
              </form>

            </div>
            <!--/.panel-body-->
          </div><!--/.panel-->

        
        <div class="panel panel-default">
            <div class="panel-heading">Hasil Pencarian</div>
            <table class="table">
            </table>
          </div>
        </div>
    <!-- /.container -->



    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/jquery/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/sweetalert-dev.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/sweetalert.min.css');?>"></script>

    <script>
      $(document).ready(function(){
        
        $('#formcari').submit(function (e) {
              
              $.ajax({
                method : "get",
                url:"<?php echo base_url('Cari/caritiket'); ?>",
                dataType: 'json',
                data:{asal : $('#asal').val(), tujuan : $('#tujuan').val()},
                success:function(response) { 
                     console.log(response);
                     if (response.length == 0) {
                      $(".table #daftartiket").remove();
                      $("<tr id='daftartiket'>").append(
                        $("<th>").text('Tiket tidak ditemukan'),
                        ).appendTo(".table");
                     }else{
                      $(".table #daftartiket").remove();
                      $("<tr id='daftartiket'>").append(
                      $("<th>").text('No tiket'),
                      $("<th>").text('Tanggal'),
                      $("<th>").text('Asal'),
                      $("<th>").text('Tujuan'),
                      $("<th>").text('Harga')
                      ).appendTo(".table");
                      $.each(response,function(i){
                         $("<tr id='daftartiket'>").append(
                         $("<td id='kodetiket"+i+"'>").text(response[i].kd_tiket),
                         $("<td id='tanggal"+i+"'>").text(response[i].tgl),
                         $("<td id='asal"+i+"'>").text(response[i].asal),
                         $("<td id='tujuan"+i+"'>").text(response[i].tujuan),
                         $("<td id='harga"+i+"'>").text(response[i].harga),
                         $("<td><input type='number' class='form-control' style='width: 60px;' value='1' id='jumlah"+i+"' min='1' max='"+response[i].sisa_tiket+"'>"),
                         $("<td><input type='button' id='btnPesan_"+i+"' class='btn btn-primary btn-xs' value='Pesan' onclick='order("+i+")'> ")
                         ).appendTo(".table")
                       });
                     }
                      
                },
                error: function(err){
                  alret(err);
                  $('.panel-body').remove();
                }
              });
              e.preventDefault();
            });
        
      });
      

    </script>
    <script type="text/javascript">
      function order(id){
        var id_user = "<?php echo $login['id_pengguna']; ?>";
        console.log(id_user);
        if (id_user=="") {
          window.location.href = "<?php echo base_url('Login') ?>";
          console.log('Tidak Login');
        }else{

          var kodetiket = ".table #kodetiket"+id;
          var tanggal = ".table #tanggal"+id;
          var harga = ".table #harga"+id;
          var jumlah = "#jumlah"+id;

          var data = {
              'kode_tiket' : $(kodetiket).text(),
              'tanggal' : $(tanggal).text(),
              'harga' : $(harga).text(),
              'jumlah' : $(jumlah).val(),
              'id_pengguna' : id_user
        };


          console.log(data);
          $.ajax({
              url:"<?php echo base_url('Cari/ordertiket') ?>",
              method:"POST",
              data: data,
              success:function(response)
              {
                  console.log(response); 
                  swal({
                  title: "Tiket Berhasil Dipesan!",
                  type: "success",
                   },
                  function(){
                      window.location.href = "<?php echo base_url('pesanan')?>";
                  });
               
                },
                error: function (err) {
                    alert(err);
                }
            });
        }
    }

</script>

  </body>

</html>
