<!doctype html>
<html lang="en">
  <head>
    <title>Transaksi Kasir Kopma </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Data Penjualan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Data Kasir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Data Barang</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Akun
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Log out</a>
                  
                  
              </li>
             
            </ul>
            
          </div>
        </div>
        </nav>

         
    <div class="container">
      <h1 class="mt-3">Transaksi Penjualan</h1>  
      <form>
        <div class="row mt-5">
          <div class="col-md-5">
            <div class="row">
              <div class="col-5">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode barang</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode barang">
                </div>
              </div>
              <div class="col-7">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama barang</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama barang">
                </div>
              </div>
              
            </div>
             <div class="row"> 
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah beli</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah beli">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga per satuan</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga satuan">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Total harga</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Total harga">
                </div>
              </div> 
            </div>
            <div class="row"> 
              <div class="col-12">
                <button type="reset" class="btn btn-warning btn-sm pull-right">Ulangi</button>     
                 <button type="submit" class="btn btn-primary btn-sm pull-right">Proses</button>
                 
              </div> 
            </div>
          </form>

          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-12">
                <table class="table table-hover table-bordered ">
                  <thead>
                    <tr>
                      <th scope="col">Kode</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Jumlah beli</th>
                      <th scope="col">Harga satuan</th>
                      <th scope="col">Total harga</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>8784</th>
                      <td>Pepsodent</td>
                      <td>4</td>
                      <td>10</td>
                      <td>40</td>
                    </tr>
                    <tr>
                      <th>8756</th>
                      <td>Ajinomoto sachet</td>
                      <td>2</td>
                      <td>100</td>
                      <td>200</td>
                    </tr>
                    <tr>
                      <th>8784</th>
                      <td>Shogun softener</td>
                      <td>12</td>
                      <td>2000</td>
                      <td>24000</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>            
            </div>
              <div class="row">
                <div class="col-4">
                  <h4>Total Bayar</h4>
                </div>
                <div class="col-8">
                  <h4>Rp 30.000,00</h4>
                </div>
                
              </div>
             <div class="row">
                <div class="col-4">
                  <h4>Jumlah Bayar</h4>
                </div>
                <div class="col-8">
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah bayar">
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-4">
                  <h4>Kembalian</h4>
                </div>
                <div class="col-8">
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kembalian">
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-4">
                  
                </div>
                <div class="col-8">
                  <a href="" class="btn btn-md btn-success btn-block">Selesai</a>
                </div>
                
              </div>
          </div>  
        </div>
        


        
       
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>