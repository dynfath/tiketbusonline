<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url('');?>">TIKO BUS </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('homepage');?>"><i class="fa fa-home" aria-hidden="true"></i>
 Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('Cari');?>"><i class="fa fa-search" aria-hidden="true"></i> Cari Tiket</a>
            </li>

            <?php 
              if ($login['isLogin']) {
                $teks = ' Status Pemesanan';
                $teks2 = ' Logout';
                $url = base_url('Pesanan');
                $url2 = base_url('login/logout');
                $logo = 'fa fa-list';
                $logo2 = "fa fa-sign-out";

              }else{
                $teks = ' Daftar';
                $teks2 = ' Login';
                $url = base_url('login/register');
                $url2 = base_url('login');
                $logo = "fa fa-user-plus";
                $logo2 = "fa fa-sign-in";
              }
            ?>

            <li class="nav-item">
              <a class="nav-link" href="<?= $url ?>"><i class="<?= $logo ?>" aria-hidden="true"></i>
<?= $teks ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $url2 ?>"><i class="<?= $logo2 ?>" aria-hidden="true"></i>
 <?= $teks2 ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

