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
              <li class="nav-item active">
                <a class="nav-link" href="#">Data Kasir<span class="sr-only">(current)</span></a>
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
      <h1 class="mt-3">Data Kasir</h1>  
      <form>
        <div class="row mt-5">
          <div class="col-md-5">
            <div class="row">
              <div class="col-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                </div>
              </div>
             
              
            </div>
             <div class="row"> 
              <div class="col-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan</label>
                  <select class="form-control" id="sel1">
                    <option>- PIlih -</option>
                    <option>Kasir</option>
                    <option>Manager</option>
                  </select>
                </div>
              </div> 
            </div>
            <div class="row"> 
              <div class="col-12">   
                 <button type="submit" class="btn btn-primary btn-md pull-right">Simpan Data</button>
                 
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
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Username</th>
                      <th scope="col">Password</th>
                      <th scope="col">Jabatan</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <td>Ahmad Rifa'i</td>
                      <td>Ahmad1890</td>
                      <td>...........</td>
                      <td>Manager</td>
                      <td><button type="button" class="btn btn-warning btn-sm">Edit</button>&nbsp<button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
                    </tr>
                    <tr>
                      <th>2</th>
                      <td>Johanes Amstrong</td>
                      <td>Johan123</td>
                      <td>...........</td>
                      <td>Manager</td>
                      <td><button type="button" class="btn btn-warning btn-sm">Edit</button>&nbsp<button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
                    </tr>
                    <tr>
                      <th>3</th>
                      <td>Kirin Kinabalu</td>
                      <td>doubleK</td>
                      <td>...............</td>
                      <td>Kasir</td>
                      <td><button type="button" class="btn btn-warning btn-sm">Edit</button>&nbsp<button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
                    </tr>
                    
                  </tbody>
                </table>
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