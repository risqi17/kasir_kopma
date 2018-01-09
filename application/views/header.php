<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $head ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>" >
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
     <!-- Memanggil file .js untuk proses autocomplete -->
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery-1.8.2.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.autocomplete.js'></script>

    <!-- Memanggil file .css untuk style saat data dicari dalam filed -->
    <link href='<?php echo base_url();?>assets/js/jquery.autocomplete.css' rel='stylesheet' />

    <!-- Memanggil file .css autocomplete_ci/assets/css/default.css -->
    <link href='<?php echo base_url();?>assets/css/default.css' rel='stylesheet' />

    <script type='text/javascript'>
        var site = "<?php echo site_url();?>";
        $(function(){
            $('.autocomplete').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/url/caribarang',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                    $('#harga').val(''+suggestion.harga); // membuat id 'v_nim' untuk ditampilkan
                    $('#id').val(''+suggestion.id); // membuat id 'v_jurusan' untuk ditampilkan
                }
            });
        });
    </script>
    <script type='text/javascript'>
        var site = "<?php echo site_url();?>";
        $(function(){
            $('.autocomplete2').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/url/caribarang2',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                    $('#harga').val(''+suggestion.harga); // membuat id 'v_nim' untuk ditampilkan
                    $('#autocomplete1').val(''+suggestion.nama); // membuat id 'v_jurusan' untuk ditampilkan
                }
            });
        });
    </script>
   <script>
  function sum() {
        var txtFirstNumberValue = document.getElementById('beli').value;
        var txtSecondNumberValue = document.getElementById('harga').value;
        var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
        if (!isNaN(result)) {
           document.getElementById('total').value = result;
        }
    }
    function kurangi() {
        var txtFirstNumberValue = document.getElementById('tot').value;
        var txtSecondNumberValue = document.getElementById('uang').value;
        var result = parseInt(txtSecondNumberValue) - parseInt(txtFirstNumberValue);
        if (!isNaN(result)) {
           document.getElementById('kembali').value = result;
        }
    }

  </script>

  </head>
  <body>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
          <div class="container">
          <a class="navbar-brand mb-0 h1" href="#">Kasir Kopma</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
             
            </ul>
             <ul class="navbar-nav ml-auto mr-5">
              <li class="nav-item <?php if($head == 'Home'){ echo 'active'; } ?>">
                <a class="nav-link" href="<?php echo base_url('index.php/url') ?>">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item <?php if($head == 'Data Penjualan'){ echo 'active'; } ?>">
                <a class="nav-link" href="<?php echo base_url('index.php/url/penjualan') ?>">Data Penjualan</a>
              </li>
              <?php if ($_SESSION['jabatan'] == "Manager") { ?>
              <li class="nav-item <?php if($head == 'Data Kasir'){ echo 'active'; } ?>">
                <a class="nav-link" href="<?php echo base_url('index.php/url/kasir') ?>">Data Kasir</a>
              </li>
              <?php } ?>
              <li class="nav-item <?php if($head == 'Data Barang'){ echo 'active'; } ?>">
                <a class="nav-link" href="<?php echo base_url('index.php/url/barang') ?>">Data Barang</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Akun
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo base_url('index.php/login/logout'); ?>">Log out</a>
                  
                  
              </li>
             
            </ul>
            
          </div>
        </div>
        </nav>
