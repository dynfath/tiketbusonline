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
    
    <!-- Custom styles for this template -->
    <link href="assets/css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Tiket Bus</h1>
          <div class="panel panel-primary">
            <div class="panel-heading">Cari Tiket</div>
            <div class="panel-body">

              <form action="<?= base_url('Cari');?>">
              <div class="form-group">
              <label for="sel1">Asal Kota : </label>
              <select class="form-control required" title='Kota Asal tidak boleh kosong' id="asal">
                  <?php foreach ($kota as $ka) { ?>
                    <option ><?= $ka['nama_kota']; ?></option>
                  <?php } ?>
                  
              </select>
              </div> 

              <div class="form-group">
              <label for="sel2">Tujuan : </label>
              <select class="form-control required" title='Kota Tujuan tidak boleh kosong' id="tujuan">
                  <?php foreach ($kota as $kt) { ?>
                    <option ><?= $kt['nama_kota']; ?></option>
                  <?php } ?> 
              </select>
              </div>
              <button type="submit" class="btn btn-primary">Cari</button>
              </form>

            </div>
            <!--/.panel-body-->
          </div><!--/.panel-->

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
         
          <div class="panel panel-primary">
            <div class="panel-heading" >Daftar Bus Hari ini</div>
            <div class="panel-body">
              <table class="table">
                <tr>
                  <th>Tiket</th>
                  <th>Kota Asal</th>
                  <th>Kota Tujuan</th>
                  <th>Jam Berangkat</th>
                  <th></th>
                </tr>
                <?php foreach ($tiket as $t) { ?>
                    <tr>
                      <td><?= $t['kd_tiket']; ?></td>
                      <td><?= $t['asal']; ?></td>
                      <td><?= $t['tujuan']; ?></td>
                      <td><?= $t['jam']; ?></td>
                      <td><button type="submit" class="btn btn-primary">Pesan</button></td>
                    </tr>
                  <?php } ?>
                
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
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js');?>"></script>


  </body>

</html>
