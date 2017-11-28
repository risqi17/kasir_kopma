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
              <li class="nav-item">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Data Penjualan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Data Kasir</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Data Barang<span class="sr-only">(current)</span></a>
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
      <h1 class="mt-3">Data Barang</h1>  
      <form>
       
            <div class="row">
              <div class="col-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Barang</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID barang">
                </div>
              </div>
              <div class="col-5">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Barang</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Barang">
                </div>
              </div>
            </div>

             <div class="row"> 
              <div class="col-2">
                <div class="form-group">
                  <label for="exampleInputEmail1">Stok</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Stok">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Beli</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Beli">
                </div>
              </div>
                <div class="col-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Jual</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Jual">
                </div>
              </div> 
            </div>
             <div class="row"> 
             
            </div>
             <div class="row"> 
              <div class="col-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Kadaluarsa</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kadaluarsa">
                </div>
              </div> 
            </div>
             
            <div class="row"> 
              <div class="col-md-9">   
                 <button type="submit" class="btn btn-primary btn-md pull-left">Simpan Data Barang</button>
                 
              </div> 
            </div>
          </form>
          <br>
            <div class="row">
              <div class="col-12">
                <table class="table table-hover table-bordered ">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">ID Barang</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Stok</th>
                      <th scope="col">Harga Beli</th>
                      <th scope="col">Harga Jual</th>
                      <th scope="col">Kadaluarsa</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <td>23412</td>
                      <td>Pepsodent Sensitif</td>
                      <td>100</td>
                      <td>12000</td>
                      <td>15000</td>
                      <td>12-03-2019</td>
                      <td><button type="button" class="btn btn-warning btn-sm">Edit</button>&nbsp<button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
                    </tr>
                    <tr>
                      <th>2</th>
                       <td>23413</td>
                      <td>Mr. Hottest Hot</td>
                      <td>50</td>
                      <td>5000</td>
                      <td>6000</td>
                      <td>19-03-2019</td>
                      <td><button type="button" class="btn btn-warning btn-sm">Edit</button>&nbsp<button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
                    </tr>
                    <tr>
                      <th>3</th>
                       <td>23414</td>
                      <td>Teh Havana</td>
                      <td>90</td>
                      <td>3000</td>
                      <td>5000</td>
                      <td>01-06-2019</td>
                      <td><button type="button" class="btn btn-warning btn-sm">Edit</button>&nbsp<button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
                    </tr>
                    
                  </tbody>
                </table>
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